<?php

require_once('./connection.php');

$listMahasiswa = getAllMahasiswa();
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
	<div class="container mt-2">
		<div class="row">
			<div class="col-10">
				<h5>Daftar Mahasiswa</h5>
			</div>
			<div class="col-2">
				<a href="./create_mahasiswa.php" class="btn btn-primary">
					Tambah Mahasiswa
				</a>
			</div>
			<div class="col-12 mt-5">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">Nim</th>
							<th scope="col">Program Studi</th>
							<th class="text-center" colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($listMahasiswa as $mahasiswa) : ?>
							<tr>
								<th scope="row">
									<?php echo $no++; ?>
								</th>
								<td>
									<?php echo $mahasiswa['nama']; ?>
								</td>
								<td>
									<?php echo $mahasiswa['nim']; ?>
								</td>
								<td>
									<?php echo $mahasiswa['unit_id'] ?>
								</td>
								<td class="text-center">
									<a href="./update_mahasiswa.php?nim=<?php echo $mahasiswa['nim']; ?>" class="btn btn-primary">Edit data</a>
								</td>
								<td class="text-center">
									<a href="" class="btn btn-danger">Hapus data</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>