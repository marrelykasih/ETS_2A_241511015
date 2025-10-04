<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\PenggajianModel;

class Anggota extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }


        $anggotaModel = new AnggotaModel();
        $penggajianModel = new PenggajianModel();


        $anggota = $anggotaModel->findAll();


        //$gaji = $penggajianModel->getGajiAnggota();

        return view('anggota/index', [
            'anggota' => $anggota,

        ]);
    }
}
