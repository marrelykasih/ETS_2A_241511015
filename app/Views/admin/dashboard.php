<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f7fc;
      font-family: "Segoe UI", sans-serif;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      margin-top: 40px;
    }
    h1 {
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 20px;
    }
    p {
      color: #555;
      font-size: 16px;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    ul li {
      margin: 12px 0;
    }
    ul li a {
      display: block;
      padding: 12px 18px;
      background: #e8add4ff;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }
    ul li a:hover {
      background: #fe0eb2ff;
      text-decoration: none;
    }
    .btn-danger {
      margin-top: 20px;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: 500;
    }
  </style>
</head>
<body class="p-4">
  <div class="container">
    <h1>Dashboard Admin</h1>
    <p>Halo, Admin! Silakan pilih menu:</p>
    <ul>
      <li><a href="<?= base_url('admin/anggota') ?>"> Kelola Anggota DPR</a></li>
      <li><a href="<?= base_url('admin/komponen') ?>"> Kelola Komponen Gaji & Tunjangan</a></li>
      <li><a href="<?= base_url('admin/penggajian') ?>"> Kelola Penggajian</a></li>
    </ul>
    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">🚪 Logout</a>
  </div>
</body>
</html>
