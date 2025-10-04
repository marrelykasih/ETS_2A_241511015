<!DOCTYPE html>
<html>
<head>
  <title>Edit Komponen Gaji</title>
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
    .form-control, .form-select {
      border-radius: 8px;
    }
    .btn-primary, .btn-secondary {
      width: 48%;
      border-radius: 8px;
      padding: 10px;
      font-size: 16px;
    }
    .btn-secondary {
      margin-left: 4%;
    }
    .form-label {
      font-weight: 500;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Edit Komponen Gaji</h1>

    <form method="post" action="<?= base_url('admin/komponen/update/'.$komponen['id_komponen_gaji']) ?>" class="card p-4 shadow-sm">
      <?= csrf_field() ?>
      
      <div class="mb-3">
        <label class="form-label">Nama Komponen</label>
        <input type="text" name="nama_komponen" class="form-control" value="<?= $komponen['nama_komponen'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori" class="form-select" required>
          <option value="">Pilih Kategori</option>
          <option value="Gaji Pokok" <?= $komponen['kategori']=='Gaji Pokok'?'selected':'' ?>>Gaji Pokok</option>
          <option value="Tunjangan Melekat" <?= $komponen['kategori']=='Tunjangan Melekat'?'selected':'' ?>>Tunjangan Melekat</option>
          <option value="Tunjangan Lain" <?= $komponen['kategori']=='Tunjangan Lain'?'selected':'' ?>>Tunjangan Lain</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Jabatan</label>
        <select name="jabatan" class="form-select" required>
          <option value="">Pilih Jabatan</option>
          <option value="Semua" <?= $komponen['jabatan']=='Semua'?'selected':'' ?>>Semua</option>
          <option value="Ketua" <?= $komponen['jabatan']=='Ketua'?'selected':'' ?>>Ketua</option>
          <option value="Wakil Ketua" <?= $komponen['jabatan']=='Wakil Ketua'?'selected':'' ?>>Wakil Ketua</option>
          <option value="Anggota" <?= $komponen['jabatan']=='Anggota'?'selected':'' ?>>Anggota</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Nominal</label>
        <input type="number" name="nominal" class="form-control" value="<?= $komponen['nominal'] ?>" min="0" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Satuan</label>
        <select name="satuan" class="form-select" required>
          <option value="">Pilih Satuan</option>
          <option value="Bulan" <?= $komponen['satuan']=='Bulan'?'selected':'' ?>>Bulan</option>
          <option value="Hari" <?= $komponen['satuan']=='Hari'?'selected':'' ?>>Hari</option>
          <option value="Periode" <?= $komponen['satuan']=='Periode'?'selected':'' ?>>Periode</option>
        </select>
      </div>

      <div class="d-flex mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('admin/komponen') ?>" class="btn btn-secondary">Batal</a>
      </div>
    </form>
    <a href="<?= base_url('admin/komponen') ?>" class="btn btn-secondary">⬅ Kembali</a>
  </div>
</body>
</html>
