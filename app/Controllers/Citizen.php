<?php
namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\PenggajianModel;

class Citizen extends BaseController
{
    public function dashboard()
    {
        return view('citizen/dashboard');
    }

    public function anggota()
    {
        $anggotaModel = new AnggotaModel();
        $data['anggota'] = $anggotaModel->findAll();
        return view('citizen/anggota/index', $data);
    }

    public function penggajian()
    {
        $penggajianModel = new PenggajianModel();
        $data['penggajian'] = $penggajianModel->getPenggajian();
        return view('citizen/penggajian/index', $data);
    }
}
