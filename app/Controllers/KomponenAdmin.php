<?php namespace App\Controllers;

use App\Models\KomponenModel;

class KomponenAdmin extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') !== 'Admin') {
            return redirect()->to('/login');
        }

        $model = new KomponenModel();
        $keyword = $this->request->getGet('q');

        if ($keyword) {
            $data['komponen'] = $model
                ->like('id_komponen', $keyword)
                ->orLike('nama_komponen', $keyword)
                ->orLike('kategori', $keyword)
                ->orLike('jabatan', $keyword)
                ->orLike('nominal', $keyword)
                ->orLike('satuan', $keyword)
                ->findAll();
        } else {
            $data['komponen'] = $model->findAll();
        }

        return view('admin/komponen/index', $data);
    }

    public function create()
    {
        return view('admin/komponen/create');
    }

    public function store()
    {
        $model = new KomponenModel();
        $model->save($this->request->getPost());
        return redirect()->to('/admin/komponen');
    }

    public function edit($id)
    {
        $model = new KomponenModel();
        $data['komponen'] = $model->find($id);
        return view('admin/komponen/edit', $data);
    }

    public function update($id)
    {
        $model = new KomponenModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/admin/komponen');
    }

    public function delete($id)
    {
        $model = new KomponenModel();
        $model->delete($id);
        return redirect()->to('/admin/komponen');
    }
}
