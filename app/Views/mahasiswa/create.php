<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card">
  <div class="card-body">
    <h4 class="mb-3">Tambah Mahasiswa</h4>
    <!-- ganti action form -->
    <form method="post" action="<?= base_url('mahasiswa/store') ?>">
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>

      <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
