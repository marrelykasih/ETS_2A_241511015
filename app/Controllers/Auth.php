<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $session   = session();
            $model     = new UserModel();

            $username  = $this->request->getPost('username');
            $password  = $this->request->getPost('password');

            $user = $model->where('username', $username)->first();

            if ($user) {
               
                if (password_verify($password, $user['password'])) {
                    $session->set([
                        'id_pengguna' => $user['id_pengguna'],
                        'username'    => $user['username'],
                        'nama_depan'  => $user['nama_depan'],
                        'nama_belakang' => $user['nama_belakang'],
                        'role'        => $user['role'],
                        'logged_in'   => true
                    ]);
                    return redirect()->to('/dashboard');
                }

               
                if (md5($password) === $user['password']) {
                   
                    $newHash = password_hash($password, PASSWORD_BCRYPT);
                    $model->update($user['id_pengguna'], ['password' => $newHash]);

                    $session->set([
                        'id_pengguna' => $user['id_pengguna'],
                        'username'    => $user['username'],
                        'nama_depan'  => $user['nama_depan'],
                        'nama_belakang' => $user['nama_belakang'],
                        'role'        => $user['role'],
                        'logged_in'   => true
                    ]);
                    if ($user['role'] === 'Admin') {
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/');
        }
                }
            }

   
            $session->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }

        return view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
