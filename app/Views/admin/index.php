<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container {
      max-width: 900px;
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
    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }
    .btn-danger {
      border-radius: 8px;
      padding: 10px 20px;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Daftar Pengguna</h1>

    <table class="table table-bordered table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Nama</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($users)): ?>
          <?php foreach ($users as $user): ?>
            <tr>
              <td class="text-center"><?= $user['id_pengguna'] ?></td>
              <td><?= $user['username'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><?= $user['nama_depan'] . ' ' . $user['nama_belakang'] ?></td>
              <td class="text-center"><?= $user['role'] ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center">Belum ada data pengguna</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <div class="text-center mt-3">
      <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
    </div>
  </div>

</body>
</html>
