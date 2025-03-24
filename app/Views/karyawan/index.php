<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Manajemen Data Karyawan</h1>
        
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        
        <a href="<?= base_url('karyawan/create') ?>" class="btn btn-primary mb-3">+ Tambah Data</a>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($karyawan as $k): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $k['nama_lengkap'] ?></td>
                    <td><?= $k['jekel'] ?></td>
                    <td><?= $k['tanggal_lahir'] ?></td>
                    <td><?= $k['telp'] ?></td>
                    <td><?= $k['alamat'] ?></td>
                    <td>
                        <a href="<?= base_url('karyawan/edit/'.$k['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="<?= base_url('karyawan/delete/'.$k['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
                <?php if(empty($karyawan)): ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data karyawan</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>