<!DOCTYPE html>
<html>
<head>
  <title>Data Anggota DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Data Anggota DPR</h1>

  <form method="get" class="mb-3">
    <input type="text" name="q" class="form-control" placeholder="Cari nama/jabatan/ID...">
  </form>

  <a href="<?= base_url('admin/anggota/create') ?>" class="btn btn-primary mb-3">Tambah Anggota</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th><th>Nama Lengkap</th><th>Jabatan</th><th>Status</th><th>Anak</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($anggota as $row): ?>
      <tr>
        <td><?= $row['id_anggota'] ?></td>
        <td><?= $row['gelar_depan'].' '.$row['nama_depan'].' '.$row['nama_belakang'].' '.$row['gelar_belakang'] ?></td>
        <td><?= $row['jabatan'] ?></td>
        <td><?= $row['status_pernikahan'] ?></td>
        <td><?= $row['jumlah_anak'] ?></td>
        <td>
          <a href="<?= base_url('admin/anggota/edit/'.$row['id_anggota']) ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="<?= base_url('admin/anggota/delete/'.$row['id_anggota']) ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
