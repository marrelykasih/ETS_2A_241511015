<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card">
  <div class="card-body">
    <h4 class="mb-3">Anggota</h4>
    <!-- ganti action form -->
    <form method="post" action="<?= base_url('mahasiswa/store') ?>">
      <div class="mb-3">
        <label class="form-label">ID anggota</label>
        <input type="text" name="id_anggota" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">gelar depan</label>
        <input type="text" name="gelar_depan" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">nama depan</label>
        <input type="text" name="nama_depan" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">nama belakang</label>
        <input type="text" name="nama_belakang" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">gelar belakang</label>
        <input type="text" name="gelar_belakang" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">jabatan</label>
        <input type="text" name="jabatan" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">status pernikahan</label>
        <input type="text" name="jurusan" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">jumlah anak</label>
        <input type="text" name="jumlah_anak" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>

      <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
