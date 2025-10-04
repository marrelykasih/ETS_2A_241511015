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
            
            $exists = $model->where(['id_anggota' => $id_anggota, 'id_komponen_gaji' => $id_komponen])->first();
            if (!$exists) {
                $model->insert([
                    'id_anggota' => $id_anggota,
                    'id_komponen_gaji' => $id_komponen
                ]);
            }
        }

        return redirect()->to('/admin/penggajian');
    }

    public function delete($id_anggota)
    {
        $model = new PenggajianModel();
        $model->where('id_anggota', $id_anggota)->delete();
        return redirect()->to('/admin/penggajian');
    }
}
