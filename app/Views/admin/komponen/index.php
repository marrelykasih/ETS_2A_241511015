<!DOCTYPE html>
<html>
<head>
  <title>Data Komponen Gaji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container {
      max-width: 1000px;
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
    .table thead th {
      text-align: center;
    }
    .table tbody td {
      vertical-align: middle;
    }
    .btn-sm {
      min-width: 60px;
    }
    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }
    .d-flex .form-control {
      border-radius: 8px;
    }
    .d-flex .btn {
      border-radius: 8px;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Data Komponen Gaji & Tunjangan</h1>

 
  <form method="get" class="mb-3 d-flex">
    <input type="text" name="q" class="form-control me-2" placeholder="Cari nama/kategori/jabatan/ID...">
    <button type="submit" class="btn btn-primary">Cari</button>
  </form>

 
  <a href="<?= base_url('admin/komponen/create') ?>" class="btn btn-success mb-3">Tambah Komponen</a>

  
  <table class="table table-bordered table-striped table-hover">
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
          <td class="text-center"><?= $row['id_komponen_gaji'] ?></td>
          <td><?= $row['nama_komponen'] ?></td>
          <td><?= $row['kategori'] ?></td>
          <td><?= $row['jabatan'] ?></td>
          <td class="text-end"><?= number_format($row['nominal'],0,',','.') ?></td>
          <td class="text-center"><?= $row['satuan'] ?></td>
          <td class="text-center">
            <a href="<?= base_url('admin/komponen/edit/'.$row['id_komponen_gaji']) ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="<?= base_url('admin/komponen/delete/'.$row['id_komponen_gaji']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="7" class="text-center">Belum ada data komponen</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
  <a href="<?= base_url('admin') ?>" class="btn btn-secondary">⬅ Kembali</a>
</div>
</body>
</html>
