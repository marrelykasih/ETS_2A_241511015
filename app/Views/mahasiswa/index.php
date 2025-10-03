<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-success mb-3">+ Tambah Mahasiswa</a>
<a href="<?= base_url('logout') ?>" class="btn btn-danger mb-3 float-end">Logout</a>

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>ID_anggota</th>
      <th>_depan</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($anggota as $m): ?>
    <tr>
      <td><?= $m['id_anggota'] ?></td>
      <td><?= $m['nama_depan'] ?></td>
      <td><?= $m['nama_belakang'] ?></td>
      <td><?= $m['gelar_depan'] ?></td>
      <td><?= $m['gelar_belakang'] ?></td>
      <td><?= $m['jabatan'] ?></td>
      <td><?= $m['status_pernikahan'] ?></td>
      
      <td>
        <a href="<?= base_url('mahasiswa/edit/' . $m['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="<?= base_url('mahasiswa/delete/' . $m['id']) ?>" class="btn btn-sm btn-danger"
           onclick="return confirm('Yakin hapus data ini?')">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection() ?>
