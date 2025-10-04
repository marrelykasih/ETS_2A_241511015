<?php namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') !== 'Admin') {
            return redirect()->to('/login')->with('error', 'Akses ditolak!');
        }

        $model = new UserModel();
        $users = $model->findAll();

        return view('admin/dashboard');
    }
}
