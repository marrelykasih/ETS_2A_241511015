<?php namespace App\Controllers;

use App\Models\PenggajianModel;
use CodeIgniter\Controller;

class Penggajian extends Controller
{
    protected $penggajianModel;

    public function __construct()
    {
        $this->penggajianModel = new PenggajianModel();
    }

    // List semua penggajian
    public function index()
    {
        $data['penggajian'] = $this->penggajianModel
            ->select('penggajian.*, anggota.nama_depan, anggota.nama_belakang, anggota.jabatan, komponen_gaji.nama_komponen, komponen_gaji.nominal')
            ->join('anggota', 'anggota.id_anggota = penggajian.id_anggota')
            ->join('komponen_gaji', 'komponen_gaji.id_komponen_gaji = penggajian.id_komponen_gaji')
            ->findAll();

        return view('penggajian/index', $data);
    }

    
    public function detail($idAnggota)
    {
        $data['detail'] = $this->penggajianModel->getDetailByAnggota($idAnggota);

        if (empty($data['detail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data penggajian untuk anggota dengan ID $idAnggota tidak ditemukan.");
        }

        return view('citizen/penggajian/detail', $data);
    }

    
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $this->penggajianModel->save([
                'id_anggota'       => $this->request->getPost('id_anggota'),
                'id_komponen_gaji' => $this->request->getPost('id_komponen_gaji'),
            ]);

            return redirect()->to('/penggajian');
        }

        return view('penggajian/create');
    }

    // Hapus data penggajian
    public function delete($id)
    {
        $this->penggajianModel->delete($id);
        return redirect()->to('/penggajian');
    }
}
