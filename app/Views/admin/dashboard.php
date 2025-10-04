
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Citizen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h1>Dashboard Citzen</h1>
    <p>Halo, Citizen! Silakan pilih menu:</p>
    <ul>
      <li><a href="<?= base_url('admin/anggota') ?>">Kelola Anggota DPR</a></li>
      <li><a href="<?= base_url('admin/komponen') ?>">Kelola Komponen Gaji & Tunjangan</a></li>
      <li><a href="<?= base_url('admin/penggajian') ?>">Kelola Penggajian</a></li>
    </ul>
    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
  </div>
</body>
</html>