<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota DPR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="container">
        <h1>Data Anggota DPR</h1>

        <form method="get" class="mb-3">
            <input type="text" name="q" class="form-control" placeholder="Cari nama/jabatan/ID...">
        </form>

        <a href="<?= base_url('admin/anggota/create') ?>" class="btn btn-primary mb-3">Tambah Anggota</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Anak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($penggajian)): ?>
                    <?php foreach ($penggajian as $row): ?>
                        <tr>
                            <td><?= $row['id_anggota'] ?></td>
                            <td><?= $row['gelar_depan'] . ' ' . $row['nama_depan'] . ' ' . $row['nama_belakang'] . ' ' . $row['gelar_belakang'] ?></td>
                            <td><?= $row['jabatan'] ?></td>
                            <td><?= number_format($row['total_gaji'], 0, ',', '.') ?></td>
                            <td>
                                <a href="<?= base_url('admin/penggajian/detail/' . $row['id_anggota']) ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?= base_url('admin/penggajian/delete/' . $row['id_anggota']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus semua gaji anggota ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data penggajian</td>
                    </tr>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</body>

</html>