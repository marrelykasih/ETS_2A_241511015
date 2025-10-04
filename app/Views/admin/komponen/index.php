<!DOCTYPE html>
<html>
<head>
  <title>Data Komponen Gaji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Data Komponen Gaji & Tunjangan</h1>

  <form method="get" class="mb-3">
    <input type="text" name="q" class="form-control" placeholder="Cari nama/kategori/jabatan/ID...">
  </form>

  <a href="<?= base_url('admin/komponen/create') ?>" class="btn btn-primary mb-3">Tambah Komponen</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th><th>Nama Komponen</th><th>Kategori</th><th>Jabatan</th><th>Nominal</th><th>Satuan</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($komponen as $row): ?>
      <tr>
        <td><?= $row['id_komponen'] ?></td>
        <td><?= $row['nama_komponen'] ?></td>
        <td><?= $row['kategori'] ?></td>
        <td><?= $row['jabatan'] ?></td>
        <td><?= number_format($row['nominal'],0,',','.') ?></td>
        <td><?= $row['satuan'] ?></td>
        <td>
          <a href="<?= base_url('admin/komponen/edit/'.$row['id_komponen']) ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="<?= base_url('admin/komponen/delete/'.$row['id_komponen']) ?>" onclick="return confirm('Yakin hapus komponen ini?')" class="btn btn-sm btn-danger">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
