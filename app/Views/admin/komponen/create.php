<!DOCTYPE html>
<html>
<head>
  <title>Tambah Komponen Gaji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container {
      max-width: 600px;
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-top: 50px;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }
    .form-control {
      border-radius: 8px;
    }
    .btn-success {
      width: 100%;
      border-radius: 8px;
      padding: 10px;
      font-size: 16px;
    }
    .form-label {
      font-weight: 500;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Tambah Komponen Gaji</h1>
    <form method="post" action="<?= base_url('admin/komponen/store') ?>">
      <?= csrf_field() ?>

      <label class="form-label" for="id_komponen">ID Komponen</label>
      <input type="text" id="id_komponen" name="id_komponen" class="form-control" placeholder="ID Komponen" required>

      <label class="form-label" for="nama_komponen">Nama Komponen</label>
      <input type="text" id="nama_komponen" name="nama_komponen" class="form-control" placeholder="Nama Komponen" required>

      <label class="form-label" for="kategori">Kategori</label>
      <select id="kategori" name="kategori" class="form-control" required>
        <option value="">Pilih Kategori</option>
        <option value="Gaji Pokok">Gaji Pokok</option>
        <option value="Tunjangan Melekat">Tunjangan Melekat</option>
        <option value="Tunjangan Lain">Tunjangan Lain</option>
      </select>

      <label class="form-label" for="jabatan">Jabatan</label>
      <select id="jabatan" name="jabatan" class="form-control" required>
        <option value="">Pilih Jabatan</option>
        <option value="Ketua">Ketua</option>
        <option value="Wakil Ketua">Wakil Ketua</option>
        <option value="Anggota">Anggota</option>
        <option value="Semua">Semua</option>
      </select>

      <label class="form-label" for="nominal">Nominal</label>
      <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Nominal" min="0" required>

      <label class="form-label" for="satuan">Satuan</label>
      <select id="satuan" name="satuan" class="form-control" required>
        <option value="">Pilih Satuan</option>
        <option value="Bulan">Bulan</option>
        <option value="Periode">Periode</option>
      </select>

      <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
    <a href="<?= base_url('admin/komponen') ?>" class="btn btn-secondary">⬅ Kembali</a>
  </div>
</body>
</html>
