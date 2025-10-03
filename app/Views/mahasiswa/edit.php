<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card">
  <div class="card-body">
    <h4 class="mb-3">Edit anggota</h4>
    <form method="post" action="<?= base_url('mahasiswa/update/' . $anggota['id_anggota']) ?>">
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= $anggota['nama'] ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" value="<?= $anggota['nim'] ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="<?= $anggota['jurusan'] ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
