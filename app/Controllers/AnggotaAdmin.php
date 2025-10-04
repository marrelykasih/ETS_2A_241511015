<?php namespace App\Controllers;

use App\Models\AnggotaModel;

class AnggotaAdmin extends BaseController
{
    public function index()
    {
        if (session()->get('role') !== 'Admin') {
            return redirect()->to('/login');
        }

        $model = new AnggotaModel();

        
        $keyword = $this->request->getGet('q');
        if ($keyword) {
            $data['anggota'] = $model->like('nama_depan', $keyword)
                ->orLike('nama_belakang', $keyword)
                ->orLike('jabatan', $keyword)
                ->orLike('id_anggota', $keyword)
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
        $model->update($id, $this->request->getPost());
        return redirect()->to('/admin/anggota');
    }

    public function delete($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);
        return redirect()->to('/admin/anggota');
    }
}
