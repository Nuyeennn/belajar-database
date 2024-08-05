<?php

require_once('connection.php');
if(isset($POST['create_mahasiswa'])){

    $nim        = $_POST['nim'];
    $name       = $_POST['name'];
    $gender     = $_POST['gender'];
    $unit_id    = $_POST['unit_id'];

    $addMahasiswa = createMahasiswa($nim, $name, $gender, $unit_id);
    if($addMahasiswa){
        echo "<script>
        alert('berhasil menambahkan mahasiswa');
        window.location.href = http://localhost/belajar-database/index.php
        </script>";
    }
}

?>

<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
<div class="container mt-5">
    <div class="row">
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="gender">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-4">
                        <label class="form-label">Program Studi</label>
                        <select class="form-select" name="unit_id">
                            <option selected disabled>Pilih Program Studi</option>
                            <option value="1">S1 - TEKNIK INFORMATIKA</option>
                            <option value="2">S1 - TEKNIK ARSITEKTUR</option>
                            <option value="3">S1 - TEKNIK PENGAIRAN</option>
                            <option value="4">S1 - HUBUNGAN INTERNASIONAL</option>
                            <option value="5">S1 - EKONOMI BISNIS</option>
                        </select>
                    </div>

        <button type="submit" name="create_mahasiswa" class= "btn btn-primary">Submit</button>
        </form>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>