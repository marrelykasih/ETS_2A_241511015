<!DOCTYPE html>
<html>
<head>
  <title>Edit Anggota DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Edit Anggota DPR</h1>
  <form method="post" action="<?= base_url('admin/anggota/update/'.$anggota['id_anggota']) ?>">
    <input name="gelar_depan" class="form-control mb-2" value="<?= $anggota['gelar_depan'] ?>">
    <input name="nama_depan" class="form-control mb-2" value="<?= $anggota['nama_depan'] ?>">
    <input name="nama_belakang" class="form-control mb-2" value="<?= $anggota['nama_belakang'] ?>">
    <input name="gelar_belakang" class="form-control mb-2" value="<?= $anggota['gelar_belakang'] ?>">
    <input name="jabatan" class="form-control mb-2" value="<?= $anggota['jabatan'] ?>">
    <input name="status_pernikahan" class="form-control mb-2" value="<?= $anggota['status_pernikahan'] ?>">
    <input name="jumlah_anak" type="number" class="form-control mb-2" value="<?= $anggota['jumlah_anak'] ?>">
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</body>
</html>
