<!DOCTYPE html>
<html>
<head>
  <title>Edit Penggajian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Edit Penggajian Anggota DPR</h1>
  <h4><?= $anggota['nama_depan'].' '.$anggota['nama_belakang'].' ('.$anggota['jabatan'].')' ?></h4>

  <form method="post" action="<?= base_url('admin/penggajian/update/'.$anggota['id_anggota']) ?>">
    <?php 
      $selectedKomponen = array_column($selected, 'id_komponen_gaji');
    ?>
    <?php foreach ($komponen as $row): ?>
      <div class="form-check">
        <input type="checkbox" 
               name="id_komponen_gaji[]" 
               value="<?= $row['id_komponen_gaji'] ?>"
               class="form-check-input"
               <?= in_array($row['id_komponen_gaji'], $selectedKomponen) ? 'checked' : '' ?>>
        <label class="form-check-label">
          <?= $row['nama_komponen'].' ('.$row['jabatan'].' - '.$row['kategori'].' - Rp'.number_format($row['nominal'],0,',','.').')' ?>
        </label>
      </div>
    <?php endforeach; ?>
    <br>
    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    <a href="<?= base_ul('admin/penggajian') ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
