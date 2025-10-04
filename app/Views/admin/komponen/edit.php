<!DOCTYPE html>
<html>
<head>
  <title>Edit Komponen Gaji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1 class="mb-4">Edit Komponen Gaji</h1>

  <form method="post" action="<?= base_url('admin/komponen/update/'.$komponen['id_komponen_gaji']) ?>" class="card p-4 shadow-sm">
    
    <div class="mb-3">
      <label class="form-label">Nama Komponen</label>
      <input type="text" name="nama_komponen" class="form-control" value="<?= $komponen['nama_komponen'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Kategori</label>
      <select name="kategori" class="form-select">
        <option value="Gaji Pokok" <?= $komponen['kategori']=='Gaji Pokok'?'selected':'' ?>>Gaji Pokok</option>
        <option value="Tunjangan Melekat" <?= $komponen['kategori']=='Tunjangan Melekat'?'selected':'' ?>>Tunjangan Melekat</option>
        <option value="Tunjangan Lain" <?= $komponen['kategori']=='Tunjangan Lain'?'selected':'' ?>>Tunjangan Lain</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Jabatan</label>
      <select name="jabatan" class="form-select">
        <option value="Semua" <?= $komponen['jabatan']=='Semua'?'selected':'' ?>>Semua</option>
        <option value="Ketua" <?= $komponen['jabatan']=='Ketua'?'selected':'' ?>>Ketua</option>
        <option value="Wakil Ketua" <?= $komponen['jabatan']=='Wakil Ketua'?'selected':'' ?>>Wakil Ketua</option>
        <option value="Anggota" <?= $komponen['jabatan']=='Anggota'?'selected':'' ?>>Anggota</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Nominal</label>
      <input type="number" name="nominal" class="form-control" value="<?= $komponen['nominal'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Satuan</label>
      <select name="satuan" class="form-select">
        <option value="Bulan" <?= $komponen['satuan']=='Bulan'?'selected':'' ?>>Bulan</option>
        <option value="Hari" <?= $komponen['satuan']=='Hari'?'selected':'' ?>>Hari</option>
        <option value="Periode" <?= $komponen['satuan']=='Periode'?'selected':'' ?>>Periode</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= base_url('admin/komponen') ?>" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>
