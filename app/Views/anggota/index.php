<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Anggota DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h1 class="mb-4">Daftar Anggota DPR</h1>

    <?php if(session()->getFlashdata('success')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Status Pernikahan</th>
          <th>Jumlah Anak</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($anggota)): ?>
          <?php foreach ($anggota as $row): ?>
            <tr>
              <td><?= $row['id_anggota'] ?></td>
              <td><?= $row['nama_depan'] . ' ' . $row['nama_belakang'] ?></td>
              <td><?= $row['jabatan'] ?></td>
              <td><?= $row['status_pernikahan'] ?></td>
              <td><?= $row['jumlah_anak'] ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="5" class="text-center">Belum ada data anggota</td></tr>
        <?php endif; ?>
      </tbody>
    </table>

    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
  </div>
</body>
</html>
