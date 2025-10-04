<!DOCTYPE html>
<html>
<head>
  <title>Data Komponen Gaji</title>
  <!-- Tambahkan Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1 class="mb-4">Data Komponen Gaji & Tunjangan</h1>

  <!-- Form Cari -->
  <form method="get" class="mb-3 d-flex">
    <input type="text" name="q" class="form-control me-2" placeholder="Cari nama/kategori/jabatan/ID...">
    <button type="submit" class="btn btn-primary">Cari</button>
  </form>

 
  <a href="<?= base_url('admin/komponen/create') ?>" class="btn btn-success mb-3">Tambah Komponen</a>

 
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nama Komponen</th>
        <th>Kategori</th>
        <th>Jabatan</th>
        <th>Nominal</th>
        <th>Satuan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($komponen)): ?>
        <?php foreach ($komponen as $row): ?>
        <tr>
          <td><?= $row['id_komponen_gaji'] ?></td>
          <td><?= $row['nama_komponen'] ?></td>
          <td><?= $row['kategori'] ?></td>
          <td><?= $row['jabatan'] ?></td>
          <td><?= number_format($row['nominal'],0,',','.') ?></td>
          <td><?= $row['satuan'] ?></td>
          <td>
            <a href="<?= base_url('admin/komponen/edit/'.$row['id_komponen_gaji']) ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="<?= base_url('admin/komponen/delete/'.$row['id_komponen_gaji']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="7" class="text-center">Belum ada data komponen</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
</body>
</html>
