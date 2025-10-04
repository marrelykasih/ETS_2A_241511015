<?php namespace App\Controllers\Citizen;

use App\Models\PenggajianModel;
use CodeIgniter\Controller;

class Penggajian extends Controller
{
    protected $penggajianModel;

    public function __construct()
    {
        $this->penggajianModel = new PenggajianModel();
    }

    public function index()
    {
        $data['penggajian'] = $this->penggajianModel
            ->select('penggajian.*, anggota.nama_depan, anggota.nama_belakang, anggota.jabatan, komponen_gaji.nama_komponen, komponen_gaji.nominal')
            ->join('anggota', 'anggota.id_anggota = penggajian.id_anggota')
            ->join('komponen_gaji', 'komponen_gaji.id_komponen_gaji = penggajian.id_komponen_gaji')
            ->findAll();

        return view('citizen/penggajian/index', $data);
    }

    public function detail($id)
    {
        $data['detail'] = $this->penggajianModel->getDetailByAnggota($id);

        return view('citizen/penggajian/detail', $data);
    }
}
