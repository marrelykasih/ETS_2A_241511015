<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

  <div class="container">
    <h1 class="mb-4">Daftar Pengguna</h1>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Nama</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><?= $user['id_pengguna'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['nama_depan'] . ' ' . $user['nama_belakang'] ?></td>
            <td><?= $user['role'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
  </div>

</body>
</html>
