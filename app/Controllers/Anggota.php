<?php namespace App\Controllers;

class Anggota extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('anggota/index');
    }
}
