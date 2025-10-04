<!DOCTYPE html>
<html>

<head>
  <title>Dashboard Citizen</title>
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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      margin-top: 60px;
      max-width: 600px;
    }

    h1 {
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 10px;
      text-align: center;
    }

    p {
      color: #555;
      font-size: 15px;
      text-align: center;
      margin-bottom: 25px;
    }

    .list-group-item {
      border: none;
      margin: 10px 0;
      padding: 15px 20px;
      border-radius: 8px;
      background: #29bd19ff;
      transition: 0.3s;
      text-align: center;
    }

    .list-group-item a {
      text-decoration: none;
      color: #ffffffff;
      font-weight: 500;
      display: block;
      font-size: 16px;
    }

    .list-group-item:hover {
      background: #29b92bff;
      transform: translateY(-2px);
    }

    .btn-danger {
      border-radius: 8px;
      font-weight: 500;
      display: block;
      width: 100%;
      margin-top: 25px;
      padding: 10px 0;
    }

    .emoji {
      font-size: 20px;
      margin-right: 8px;
    }
  </style>
</head>

<body class="p-4">
  <div class="container">
    <h1>Dashboard Citizen</h1>
    <p>Halo, Citizen! Silakan pilih menu:</p>

    <ul class="list-group">
      <li class="list-group-item">
        <a href="<?= base_url('citizen/anggota') ?>"><span class="emoji">📋</span>Daftar Anggota DPR</a>
      </li>
      <li class="list-group-item">
        <a href="<?= base_url('citizen/penggajian') ?>"><span class="emoji">💰</span>Penggajian Anggota DPR</a>
      </li>
    </ul>
    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">🚪 Logout</a>
  </div>
</body>

</html>