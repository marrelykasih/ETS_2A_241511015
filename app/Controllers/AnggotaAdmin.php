<?php namespace App\Controllers;

use App\Models\AnggotaModel;

class AnggotaAdmin extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') !== 'Admin') {
            return redirect()->to('/login');
        }

        $model = new AnggotaModel();
        $keyword = $this->request->getGet('q');

        if ($keyword) {
            $data['anggota'] = $model
                ->like('id_anggota', $keyword)
                ->orLike('nama_depan', $keyword)
                ->orLike('nama_belakang', $keyword)
                ->orLike('jabatan', $keyword)
                ->findAll();
        } else {
            $data['anggota'] = $model->findAll();
        }

        return view('admin/anggota/index', $data);
    }

    public function create()
    {
        return view('admin/anggota/create');
    }

    public function store()
    {
        $model = new AnggotaModel();
        $model->save($this->request->getPost());
        return redirect()->to('/admin/anggota');
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);
        return view('admin/anggota/edit', $data);
    }

    public function update($id)
{
    $model = new AnggotaModel();
    $data = [
        'gelar_depan'        => $this->request->getPost('gelar_depan'),
        'nama_depan'         => $this->request->getPost('nama_depan'),
        'nama_belakang'      => $this->request->getPost('nama_belakang'),
        'gelar_belakang'     => $this->request->getPost('gelar_belakang'),
        'jabatan'            => $this->request->getPost('jabatan'),
        'status_pernikahan'  => $this->request->getPost('status_pernikahan'),
        'jumlah_anak'        => $this->request->getPost('jumlah_anak'),
    ];

    $model->update($id, $data);
    return redirect()->to('/admin/anggota');
}

    public function delete($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);
        return redirect()->to('/admin/anggota');
    }
}
