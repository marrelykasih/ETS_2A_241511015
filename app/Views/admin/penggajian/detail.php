<!DOCTYPE html>
<html>
<head>
    <title>Detail Penggajian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Detail Penggajian Anggota DPR</h2>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID Komponen</th>
                <th>Nama Komponen</th>
                <th>Kategori</th>
                <th>Jabatan</th>
                <th>Nominal</th>
                <th>Satuan</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            <?php foreach ($detail as $row): ?>
                <tr>
                    <td><?= $row['id_komponen_gaji'] ?></td>
                    <td><?= $row['nama_komponen'] ?></td>
                    <td><?= $row['kategori'] ?></td>
                    <td><?= $row['jabatan'] ?></td>
                    <td><?= number_format($row['nominal'],0,',','.') ?></td>
                    <td><?= $row['satuan'] ?></td>
                </tr>
                <?php $total += $row['nominal']; ?>
            <?php endforeach; ?>
            <tr class="table-success fw-bold">
                <td colspan="4">TOTAL TAKE HOME PAY</td>
                <td colspan="2"><?= number_format($total,0,',','.') ?></td>
            </tr>
        </tbody>
    </table>

    <a href="<?= base_url('admin/penggajian') ?>" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>
