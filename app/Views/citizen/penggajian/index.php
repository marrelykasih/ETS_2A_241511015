<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Penggajian Anggota DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
  <div class="container">
    <h1 class="mb-4">Penggajian Anggota DPR</h1>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID Anggota</th>
          <th>Nama Lengkap</th>
          <th>Jabatan</th>
          <th>Total Gaji (Take Home Pay)</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($penggajian)): ?>
          <?php foreach ($penggajian as $row): ?>
            <tr>
              <td><?= $row['id_anggota'] ?></td>
              <td><?= $row['gelar_depan'] . ' ' . $row['nama_depan'] . ' ' . $row['nama_belakang'] . ' ' . $row['gelar_belakang'] ?></td>
              <td><?= $row['jabatan'] ?></td>
              <td><?= number_format($row['total_gaji'], 0, ',', '.') ?>
            <a href="<?= base_url('citizen/penggajian/detail/'.$row['id_anggota']) ?>" class="btn btn-info">Detail</a>

            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-center">Belum ada data penggajian</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
    
    <a href="<?= base_url('citizen/dashboard') ?>" class="btn btn-secondary">⬅ Kembali</a>
  </div>
</body>

</html>