<?php
namespace App\Controllers;

use App\Models\PenggajianModel;
use App\Models\AnggotaModel;
use App\Models\KomponenModel;

class PenggajianAdmin extends BaseController
{
    public function index()
    {
        $model = new PenggajianModel();
        $data['penggajian'] = $model->getPenggajian();
        return view('admin/penggajian/index', $data);
    }

    public function detail($id)
    {
        $model = new PenggajianModel();
        $data['detail'] = $model->getDetail($id);
        return view('admin/penggajian/detail', $data);
    }

    public function create()
    {
        $anggotaModel = new AnggotaModel();
        $komponenModel = new KomponenModel();

        $data['anggota'] = $anggotaModel->findAll();
        $data['komponen'] = $komponenModel->findAll();

        return view('admin/penggajian/create', $data);
    }

    public function store()
    {
        $model = new PenggajianModel();

        $id_anggota = $this->request->getPost('id_anggota');
        $komponen = $this->request->getPost('id_komponen_gaji');

        foreach ($komponen as $id_komponen) {
            // Cek duplikat
            $exists = $model->where([
                'id_anggota' => $id_anggota,
                'id_komponen_gaji' => $id_komponen
            ])->first();

            if (!$exists) {
                $model->insert([
                    'id_anggota' => $id_anggota,
                    'id_komponen_gaji' => $id_komponen
                ]);
            }
        }

        return redirect()->to('/admin/penggajian')->with('success','Data penggajian berhasil ditambahkan');
    }

    

    public function delete($id_anggota)
    {
        $model = new PenggajianModel();
        $model->where('id_anggota', $id_anggota)->delete();
        return redirect()->to('/admin/penggajian')->with('success','Data penggajian berhasil dihapus');
    }

    public function edit($id_anggota)
{
    $penggajianModel = new PenggajianModel();
    $anggotaModel = new AnggotaModel();
    $komponenModel = new KomponenModel();

    $data['anggota'] = $anggotaModel->find($id_anggota);
    $data['komponen'] = $komponenModel->findAll();
    $data['selected'] = $penggajianModel->where('id_anggota', $id_anggota)->findAll();

    return view('admin/penggajian/edit', $data);
}

public function update($id_anggota)
{
    $penggajianModel = new PenggajianModel();

    // hapus data lama dulu
    $penggajianModel->where('id_anggota', $id_anggota)->delete();

    // simpan data baru
    $komponen = $this->request->getPost('id_komponen_gaji');
    if ($komponen) {
        foreach ($komponen as $id_komponen) {
            $penggajianModel->insert([
                'id_anggota' => $id_anggota,
                'id_komponen_gaji' => $id_komponen
            ]);
        }
    }

    return redirect()->to('/admin/penggajian')->with('success', 'Data penggajian berhasil diupdate');
}

}
