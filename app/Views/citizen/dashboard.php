<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Citizen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h1>Dashboard Citizen</h1>
    <p>Halo, Citizen! Silakan pilih menu:</p>

    <ul class="list-group">
      <li class="list-group-item">
        <a href="<?= base_url('citizen/anggota') ?>">📋 Daftar Anggota DPR</a>
      </li>
      <li class="list-group-item">
        <a href="<?= base_url('citizen/penggajian') ?>">💰 Penggajian Anggota DPR</a>
      </li>
    </ul>

    <a href="<?= base_url('/logout') ?>" class="btn btn-danger mt-3">Logout</a>
  </div>
</body>
</html>
