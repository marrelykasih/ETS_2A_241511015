<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Penggajian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h2>Tambah Data Penggajian</h2>

  <form method="post" action="<?= base_url('admin/penggajian/store') ?>">
   
    <div class="mb-3">
      <label for="id_anggota" class="form-label">Pilih Anggota DPR</label>
      <select name="id_anggota" id="id_anggota" class="form-select" required>
        <option value="">-- Pilih Anggota --</option>
        <?php foreach ($anggota as $a): ?>
          <option value="<?= $a['id_anggota'] ?>">
            <?= $a['id_anggota'] ?> - <?= $a['nama_depan'].' '.$a['nama_belakang'].' ('.$a['jabatan'].')' ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

   
    <div class="mb-3">
      <label class="form-label">Pilih Komponen Gaji & Tunjangan</label>
      <div class="border rounded p-3" style="max-height: 400px; overflow-y: auto;">
        <?php foreach ($komponen as $k): ?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="id_komponen_gaji[]" value="<?= $k['id_komponen_gaji'] ?>" id="komponen<?= $k['id_komponen_gaji'] ?>">
            <label class="form-check-label" for="komponen<?= $k['id_komponen_gaji'] ?>">
              <?= $k['nama_komponen'] ?>
              <small class="text-muted">
                (<?= $k['kategori'] ?> - <?= $k['jabatan'] ?> - <?= number_format($k['nominal'],0,',','.') ?>/<?= $k['satuan'] ?>)
              </small>
            </label>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="mt-3">
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="<?= base_url('admin/penggajian') ?>" class="btn btn-secondary">Kembali</a>
    </div>
  </form>
</div>
</body>
</html>
