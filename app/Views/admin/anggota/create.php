<!DOCTYPE html>
<html>
<head>
  <title>Tambah Anggota DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Tambah Anggota DPR</h1>
  <form method="post" action="<?= base_url('admin/anggota/store') ?>">
    <input name="id_anggota" class="form-control mb-2" placeholder="ID Anggota">
    <input name="gelar_depan" class="form-control mb-2" placeholder="Gelar Depan">
    <input name="nama_depan" class="form-control mb-2" placeholder="Nama Depan">
    <input name="nama_belakang" class="form-control mb-2" placeholder="Nama Belakang">
    <input name="gelar_belakang" class="form-control mb-2" placeholder="Gelar Belakang">
    <input name="jabatan" class="form-control mb-2" placeholder="Jabatan">
    <input name="status_pernikahan" class="form-control mb-2" placeholder="Status Pernikahan">
    <input name="jumlah_anak" type="number" class="form-control mb-2" placeholder="Jumlah Anak">
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
</body>
</html>
