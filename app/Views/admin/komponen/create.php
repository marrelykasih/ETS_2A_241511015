<!DOCTYPE html>
<html>
<head>
  <title>Tambah Komponen Gaji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Tambah Komponen Gaji</h1>
  <form method="post" action="<?= base_url('admin/komponen/store') ?>">
    <input name="id_komponen" class="form-control mb-2" placeholder="ID Komponen">
    <inpt name="nama_komponen" class="form-control mb-2" placeholder="Nama Komponen">
    <input name="kategori" class="form-control mb-2" placeholder="Kategori (Gaji Pokok / Tunjangan Melekat / Tunjangan Lain)">
    <input name="jabatan" class="form-control mb-2" placeholder="Jabatan (Ketua / Wakil Ketua / Anggota / Semua)">
    <input name="nominal" type="number" class="form-control mb-2" placeholder="Nominal">
    <input name="satuan" class="form-control mb-2" placeholder="Satuan (Bulan / Periode)">
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
</body>
</html>
