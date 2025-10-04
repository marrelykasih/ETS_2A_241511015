<?php namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\PenggajianModel;

class Anggota extends BaseController
{
    public function index()
    {
       // if (!session()->get('logged_in')) {
           // return redirect()->to('/login');
        //}

        $id_pengguna = session()->get('id_pengguna');

        $anggotaModel = new AnggotaModel();
        $penggajianModel = new PenggajianModel();


        $anggota = $anggotaModel->find($id_pengguna);

        
        $gaji = $penggajianModel->getGajiAnggota($id_pengguna);

        return view('anggota/index', [
            'anggota' => $anggota,
            'gaji' => $gaji
        ]);
    }
}
