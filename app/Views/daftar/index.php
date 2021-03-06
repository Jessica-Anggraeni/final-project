<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar Seminar "Sukses Kuliah di Luar Negeri"</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header bg-warning text-black">Form Daftar Seminar "Sukses Kuliah di Luar Negeri"</div>
            <div class="card-body">
                <!-- <form action="<?= base_url('daftar/save'); ?>" method="POST"> -->
                    <!-- <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control">
                    </div> -->
                    <div class="form-group mt-3">
                        <label for="nama">Nama Peserta</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="jenis_kelamin">Kategori Peserta</label>
                        <select class="form-select" name="kategori_peserta" id="kategori_peserta">
                            <option value="">Pilih Kategori Peserta</option>
                            <option value="Laki-Laki">Pelajar</option>
                            <option value="Perempuan">Mahasiswa</option>
                            <option value="Laki-Laki">Karyawan Swasta</option>
                            <option value="Perempuan">Guru/Dosen</option>
                            <option value="Laki-Laki">Umum</option>
                            <option value="Perempuan">ASN</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tgl_lahir">Tanggal Daftar</label>
                        <input type="date" id="tgl_daftar" name="tgl_daftar" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="tempat_lahir">Alasan daftar</label>
                        <input type="text" id="alasan_daftar" name="alasan_daftar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-warning mt-3 text-black">
                    <a href="<?php echo base_url('index.php/daftar')?>" class="btn btn-warning">Submit</a></button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
