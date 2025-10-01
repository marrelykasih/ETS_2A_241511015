<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function check()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));

        $user = $model->where('username', $username)
                      ->where('password', $password)
                      ->first();

        if ($user) {
            $session->set('username', $user['username']);
            return redirect()->to('/mahasiswa');
        } else {
            return redirect()->to('/login')->with('error', 'Login gagal!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
