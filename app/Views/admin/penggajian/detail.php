<!DOCTYPE html>
<html>
<head>
  <title>Detail Penggajian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h1>Detail Penggajian Anggota DPR</h1>

  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Nama Komponen</th>
        <th>Kategori</th>
        <th>Nominal</th>
        <th>Satuan</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $total = 0;
      if (!empty($detail)): ?>
        <?php foreach ($detail as $row): 
          $total += $row['nominal'];
        ?>
          <tr>
            <td><?= $row['nama_komponen'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= number_format($row['nominal'],0,',','.') ?></td>
            <td><?= $row['satuan'] ?></td>
          </tr>
        <?php endforeach; ?>
        <tr class="table-info">
          <td colspan="2"><strong>Total Take Home Pay</strong></td>
          <td colspan="2"><strong><?= number_format($total,0,',','.') ?></strong></td>
        </tr>
      <?php else: ?>
        <tr>
          <td colspan="4" class="text-center">Belum ada data penggajian</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

  <a href="<?= base_url('admin/penggajian') ?>" class="btn btn-secondary">⬅ Kembali</a>
</div>
</body>
</html>
