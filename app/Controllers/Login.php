<?php

namespace App\Controllers;

use App\Models\M_operator;

class Login extends BaseController
{
    protected $operatorModel;
    public function __construct()
    {
        $this->operatorModel = new M_operator();
    }
    public function auth_operator()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $this->operatorModel->where('username_operator', $username)->first();

        if ($data){
            $password_data = $data['pass_operator'];
            $id = $data['id_operator'];

            $verify = password_verify($password, $password_data);

            if($verify){
                $sessionData = [
                    'id_operator' => $data['id_operator'],
                    'nama_operator' => $data['nama_operator'],
                    'username_operator' => $data['username_operator'],
                    'logged_in_operator' => TRUE

                ];
                $session->set($sessionData);
                return redirect()->to((base_url('Operator/dashboard')));
            } else{
                return redirect()->to((base_url('Login/Login_operator')))->with('type-status','error')->with('massage', 'Password tidak benar');

            }
        } else{
            return redirect()->to((base_url('Login/Login_operator')))->with('type-status','error')->with('massage', 'username tidak benar');

        }
    }
    public function logout_operator()
    {
        $session = session();
        $session->destroy();
        return view('login');

    }
    public function login_operator()
    {
        return view('login');
    }
    public function login_siswa()
    {
        return view('login_siswa');
    }
}
