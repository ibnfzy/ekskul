<?php

namespace App\Controllers;

use App\Models\M_dt_ekskul;
use App\Models\M_dt_kriteria;
use App\Models\M_ekskul;
use App\Models\M_kriteria;
use App\Models\M_operator;
use App\Models\M_siswa;

class Operator extends BaseController
{
    protected $operatorModel;
    protected $siswaModel;
    protected $kriteriaModel;
    protected $dtkriteriaModel;
    protected $dtekskulModel;
    protected $ekskulModel;
    public function __construct()
    {
        $this->operatorModel = new M_operator();   
        $this->siswaModel = new M_siswa();
        $this->kriteriaModel = new M_kriteria();
        $this->dtkriteriaModel = new M_dt_kriteria();
        $this->dtekskulModel = new M_dt_ekskul();
        $this->ekskulModel = new M_ekskul();

    }
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('Operator/dashboard', $data);
    }
    public function operator()
    {
        $data =[
            'title' => 'Operator',
            'operator' => $this->operatorModel->findAll()
        ];
        return view('Operator/operator', $data);
    }
    public function add_operator()
    {
        $data =[
            'title' => 'Tambah Operator'
        ];
        return view('Operator/add_operator', $data);
    }
    public function store_operator()
    {
        $passConfirm = $this->request->getPost('kpassword');
        $userName = $this->request->getPost('username');

        $checkUname = $this->operatorModel->where('username_operator',$userName)->first();

        if ($checkUname){
            return redirect()->to((base_url('operator/add_operator')))->with('type-status','error')->with('massage', 'username sudah di pakai');
            
        }
        if ($this->request->getPost('password') == $passConfirm){
            $data = [
              'username_operator' => $this->request->getPost('username'),
              'nama_operator' => $this->request->getPost('name'),
              'pass_operator' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)  
            ];
            $this->operatorModel->save($data);
            return redirect()->to((base_url('operator/operator')))->with('type-status','success')->with('massage', 'data berhasil di tambahkan');

        } else {
            return redirect()->to((base_url('operator/add_operator')))->with('type-status','error')->with('massage', 'password tidak sama');

        }
    }
    public function edit_operator($id)
    {
        $data =[
            'title' => 'Ubah Operator',
            'operator' => $this->operatorModel->find($id)
        ];
        return view('Operator/edit_operator', $data);
    }
    public function update_operator($id)
    {
        $passConfirm = $this->request->getPost('kpassword');
        $userName = $this->request->getPost('username');

        $checkUname = $this->operatorModel->where('username_operator',$userName)->first();
        $oldData = $this->operatorModel->find($id);
        if ($oldData['username_operator'] != $userName && $checkUname){
            return redirect()->to((base_url('operator/edit_operator/'.$id)))->with('type-status','error')->with('massage', 'username sudah di pakai');
        }
        if ($this->request->getPost(('password') == $passConfirm && $this->request->getPost('password') != null)){
            $data = [
                'username_operator' => $this->request->getPost('username'),
                'nama_operator' => $this->request->getPost('name'),
                'pass_operator' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)  
              ];
              $this->operatorModel->update($id, $data);
            return redirect()->to((base_url('operator/operator')))->with('type-status','success')->with('massage', 'data berhasil di tambahkan');

        }
        if ($this->request->getPost('password') == null){
            $data = [
                'username_operator' => $this->request->getPost('username'),
                'nama_operator' => $this->request->getPost('name'),
              ];
              $this->operatorModel->update($id, $data);
            return redirect()->to((base_url('operator/operator')))->with('type-status','success')->with('massage', 'data berhasil di tambahkan');
        }
        return redirect()->to((base_url('operator/edit_operator/'.$id)))->with('type-status','error')->with('massage', 'gagal mengubah data');


    }
    public function delete_operator($id){
        $this->operatorModel->delete($id);
        return redirect()->to((base_url('operator/operator')))->with('type-status','success')->with('massage', 'data berhasil di hapus');
    }
    public function siswa(){
        $data =[
            'title' => 'Siswa',
            'siswa' => $this->siswaModel->findAll()
        ];
        return view('Operator/siswa', $data);
    }
    public function add_siswa(){
        $data =[
            'title' => 'Tambah Siswa'
        ];
        return view('Operator/add_siswa', $data);
    }
    public function store_siswa(){
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('name'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ];
        $this->siswaModel->save($data);
        return redirect()->to((base_url('operator/siswa')))->with('type-status','success')->with('massage', 'data berhasil di tambahkan');
    }
    public function edit_siswa($id){
        $data =[
            'title' => 'Ubah Siswa',
            'siswa' => $this->siswaModel->find($id)
        ];
        return view('Operator/edit_siswa', $data);
    }
    public function update_siswa($id){
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('name'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ];
        $this->siswaModel->update($id,$data);
        return redirect()->to((base_url('operator/siswa')))->with('type-status','success')->with('massage', 'data berhasil di ubah');
    }
    public function delete_siswa($id){
        $this->siswaModel->delete($id);
        return redirect()->to((base_url('operator/siswa')))->with('type-status','success')->with('massage', 'data berhasil di hapus');
    }
    public function kriteria()
    {
        $data = [
            'title' => 'Kriteria',
            'kriteria' => $this->kriteriaModel->findAll()
        ];
        return view('Operator/kriteria', $data);
    }
    public function add_kriteria()
    {
        $data = [
            'title' => 'add kriteria'
        ];
        return view('Operator/add_kriteria', $data);
    }
    public function store_kriteria(){
        $data = [
            'kriteria' => $this->request->getPost('kriteria'),
            'bobot' => $this->request->getPost('bobot'),
        ];
        $this->kriteriaModel->save($data);
        return redirect()->to((base_url('operator/kriteria')))->with('type-status','success')->with('massage', 'data berhasil di tambahkan');
    }
    public function edit_kriteria($id)
    {
        $data = [
            'title' => 'edit kriteria',
            'kriteria' => $this->kriteriaModel->find($id)
        ];
        return view('Operator/edit_kriteria', $data);
    }
    public function update_kriteria($id){
        $data = [
            'kriteria' => $this->request->getPost('kriteria'),
            'bobot' => $this->request->getPost('bobot'),
        ];
        $this->kriteriaModel->update($id,$data);
        return redirect()->to((base_url('operator/kriteria')))->with('type-status','success')->with('massage', 'data berhasil di ubah');
    }
    public function delete_kriteria($id){
        $this->kriteriaModel->delete($id);
        return redirect()->to((base_url('operator/kriteria')))->with('type-status','success')->with('massage', 'data berhasil di hapus');
    }
    public function dtkriteria()
    {
        $get = $this->dtkriteriaModel->findAll();
        $data = [
            'title' => 'Detail Kriteria',
            'dtkriteria' => $this->dtkriteriaModel->findAll()
        ];
        return view('Operator/dt_kriteria', $data);
    }
    public function add_dt_kriteria()
    {
        $data = [
            'title' => 'add detail kriteria',
            'kriteria' => $this->kriteriaModel->findAll()
        ];
        return view('Operator/add_dt_kriteria', $data);
    }
    public function store_dt_kriteria()
    {
        $get = $this->kriteriaModel->find($this->request->getPost('kriteria'));
        $data = [
            'id_kriteria' => $this->request->getPost('kriteria'),
            'kriteria' => $get['kriteria'],
            'keterangan' => $this->request->getPost('ket'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        $this->dtkriteriaModel->save($data);
        return redirect()->to((base_url('operator/dtkriteria')))->with('type-status','success')->with('massage', 'data berhasil di tambahkan');
    }
    public function edit_dt_kriteria($id)
    {
        $data = [
            'title' => 'add detail kriteria',
            'kriteria' => $this->kriteriaModel->findAll(),
            'dt' => $this->dtkriteriaModel->find($id)
        ];
        return view('Operator/edit_dt_kriteria', $data);
    }
    public function update_dt_kriteria($id)
    {
        $get = $this->kriteriaModel->find($this->request->getPost('kriteria'));
        $data = [
            'id_kriteria' => $this->request->getPost('kriteria'),
            'kriteria' => $get['kriteria'],
            'keterangan' => $this->request->getPost('ket'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        $this->dtkriteriaModel->update($id,$data);
        return redirect()->to((base_url('operator/dtkriteria')))->with('type-status','success')->with('massage', 'data berhasil di ubah');
    }
    public function delete_dt_kriteria($id)
    {
        $this->dtkriteriaModel->delete($id);
        return redirect()->to((base_url('operator/dtkriteria')))->with('type-status','success')->with('massage', 'data berhasil di hapus');
    }
    public function ekskul()
    {
        $data =[
            'title' => 'ekskul',
            'ekskul' => $this->ekskulModel->findAll()
        ];
        return view('Operator/ekskul', $data);
    }
    public function add_ekskul()
    {
         $data = [
            'title' => 'add ekskul'
        ];
        return view('Operator/add_ekskul', $data);
    }
    public function store_ekskul()
    {
        $data = [
           'ekskul' => $this->request->getPost('ekskul'),
           'gambar_ekskul' => $this->request->getFile('gambar')->getName(),
           'deskripsi_ekskul' => $this->request->getPost('text')
        ]; 
        
        if ($this->request->getFile('gambar')->isValid() && !$this->request->getFile('gambar')->hasMoved()) {
            $this->request->getFile('gambar')->move('uploads');
        }

        $this->ekskulModel->save($data);
        return redirect()->to((base_url('operator/ekskul')))->with('type-status','success')->with('massage', 'data berhasil di tambah');
    }

    public function update_ekskul($id)
    {
        $img = $this->request->getFile('gambar');

        if ($img->isValid()) {
            $data = [
                'ekskul' => $this->request->getPost('ekskul'),
                'gambar_ekskul' => $this->request->getFile('gambar')->getName,
                'deskripsi_ekskul' => $this->request->getPost('text')
             ];

            if ($this->request->getFile('gambar')->isValid() && !$this->request->getFile('gambar')->hasMoved()) {
                $this->request->getFile('gambar')->move('uploads');
            }
    
            $this->ekskulModel->update($id, $data);
            return redirect()->to((base_url('operator/ekskul')))->with('type-status','success')->with('massage', 'data berhasil di ubah');
        } else {
            $data = [
                'ekskul' => $this->request->getPost('ekskul'),
                'deskripsi_ekskul' => $this->request->getPost('text')
             ];

             $this->ekskulModel->update($id, $data);
             return redirect()->to((base_url('operator/ekskul')))->with('type-status','success')->with('massage', 'data berhasil di ubah');
        }
    }
    public function edit_ekskul($id)
    {
        $data = [
            'title' => 'edit ekskul',
            'ekskul' => $this->ekskulModel->find($id)
        ];
        return view('Operator/edit_ekskul', $data);
    }
    public function delete_ekskul($id)
    {
        $this->ekskulModel->delete($id);
        return redirect()->to((base_url('operator/ekskul')))->with('type-status','success')->with('massage', 'data berhasil di hapus');
    }
    public function dt_ekskul()
    {
        $data = [
            'title' => 'detail ekskul',
            'dt_ekskul' => $this->dtekskulModel->findAll()
        ];
        return view('Operator/dt_ekskul', $data);
    }
    public function add_dt_ekskul()
    {
        $data =[
            'title' => 'tembah detail ekskul',
            'ekskul' => $this->ekskulModel->findAll(),
            'kriteria' => $this->kriteriaModel->findAll(),
        ];
        return view('Operator/add_dt_ekskul', $data);
    }
    public function store_dt_ekskul()
    {
        $getEkskul = $this->ekskulModel->find($this->request->getPost('ekskul'));
        $getKriteria = $this->kriteriaModel->find($this->request->getPost('kriteria'));
        $data = [
            'id_ekskul' => $this->request->getPost('ekskul'),
            'nama_ekskul' => $getEkskul['ekskul'],
            'id_kriteria' => $this->request->getPost('kriteria'),
            'nama_kriteria' => $getKriteria['kriteria'],
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $this->dtekskulModel->save($data);
        return redirect()->to((base_url('operator/dt_ekskul')))->with('type-status','success')->with('massage', 'data berhasil di tambah');
    }
    public function edit_dt_ekskul($id)
    {
        $data =[
            'title' => 'tembah detail ekskul',
            'ekskul' => $this->ekskulModel->findAll(),
            'kriteria' => $this->kriteriaModel->findAll(),
            'dt_ekskul' => $this->dtekskulModel->find($id)
        ];
        return view('Operator/edit_dt_ekskul', $data);
    }
    public function update_dt_ekskul($id)
    {
        $getEkskul = $this->ekskulModel->find($this->request->getPost('ekskul'));
        $getKriteria = $this->kriteriaModel->find($this->request->getPost('kriteria'));
        $data = [
            'id_ekskul' => $this->request->getPost('ekskul'),
            'nama_ekskul' => $getEkskul['ekskul'],
            'id_kriteria' => $this->request->getPost('kriteria'),
            'nama_kriteria' => $getKriteria['kriteria'],
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $this->dtekskulModel->update($id, $data);
        return redirect()->to((base_url('operator/dt_ekskul')))->with('type-status','success')->with('massage', 'data berhasil di ubah');
    }
    public function delete_dt_ekskul($id)
    {
        $this->dtekskulModel->delete($id);
        return redirect()->to((base_url('operator/dt_ekskul')))->with('type-status','success')->with('massage', 'data berhasil di hapus');
    }
}

