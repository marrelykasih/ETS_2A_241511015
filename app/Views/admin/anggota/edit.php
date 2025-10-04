<!DOCTYPE html>
<html>
<head>
  <title>Edit Anggota DPR</title>
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
    .btn-primary {
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
    <h1>Edit Anggota DPR</h1>
    <form method="post" action="<?= base_url('admin/anggota/update/'.$anggota['id_anggota']) ?>">
      <?= csrf_field() ?>
      <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'] ?>">

      <label class="form-label" for="gelar_depan">Gelar Depan</label>
      <input type="text" id="gelar_depan" name="gelar_depan" class="form-control" value="<?= $anggota['gelar_depan'] ?>">

      <label class="form-label" for="nama_depan">Nama Depan</label>
      <input type="text" id="nama_depan" name="nama_depan" class="form-control" value="<?= $anggota['nama_depan'] ?>" required>

      <label class="form-label" for="nama_belakang">Nama Belakang</label>
      <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" value="<?= $anggota['nama_belakang'] ?>">

      <label class="form-label" for="gelar_belakang">Gelar Belakang</label>
      <input type="text" id="gelar_belakang" name="gelar_belakang" class="form-control" value="<?= $anggota['gelar_belakang'] ?>">

      <label class="form-label" for="jabatan">Jabatan</label>
      <input type="text" id="jabatan" name="jabatan" class="form-control" value="<?= $anggota['jabatan'] ?>">

      <label class="form-label" for="status_pernikahan">Status Pernikahan</label>
      <select id="status_pernikahan" name="status_pernikahan" class="form-control">
        <option value="">Pilih Status</option>
        <option value="Belum Menikah" <?= $anggota['status_pernikahan'] == 'Belum Menikah' ? 'selected' : '' ?>>Belum Menikah</option>
        <option value="Menikah" <?= $anggota['status_pernikahan'] == 'Menikah' ? 'selected' : '' ?>>Menikah</option>
        <option value="Cerai" <?= $anggota['status_pernikahan'] == 'Cerai' ? 'selected' : '' ?>>Cerai</option>
      </select>

      <label class="form-label" for="jumlah_anak">Jumlah Anak</label>
      <input type="number" id="jumlah_anak" name="jumlah_anak" class="form-control" value="<?= $anggota['jumlah_anak'] ?>" min="0">

      <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
    <a href="<?= base_url('admin/anggota') ?>" class="btn btn-secondary">⬅ Kembali</a>
  </div>
</body>
</html>
