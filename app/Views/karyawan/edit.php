<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Data Karyawan</h1>
        
        <form action="<?= base_url('karyawan/update/'.$karyawan['id']) ?>" method="post">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $karyawan['nama_lengkap'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="jekel">Jenis Kelamin</label>
                <select class="form-control" id="jekel" name="jekel" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" <?= ($karyawan['jekel'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= ($karyawan['jekel'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $karyawan['tanggal_lahir'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" class="form-control" id="telp" name="telp" value="<?= $karyawan['telp'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= $karyawan['alamat'] ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="<?= base_url('karyawan') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>