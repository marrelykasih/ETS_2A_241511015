<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

  <div class="container">
    <h1>Selamat Datang, <?= session()->get('nama_depan') ?>!</h1>
    <p>Ini adalah halaman utama untuk anggota.</p>
    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
  </div>

</body>
</html>
