public function update($id)
{
    $model = new \App\Models\KomponenModel();
    $data = [
        'nama_komponen' => $this->request->getPost('nama_komponen'),
        'kategori'      => $this->request->getPost('kategori'),
        'jabatan'       => $this->request->getPost('jabatan'),
        'nominal'       => $this->request->getPost('nominal'),
        'satuan'        => $this->request->getPost('satuan'),
    ];
    $model->update($id, $data);
    return redirect()->to('/admin/komponen');
}
