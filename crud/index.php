<?php
require 'functions.php';
$siswa = query("SELECT * FROM data_siswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>

	<div class="container">

<h1>Daftar Siswa SMKN 2 Jakarta</h1>

<a href="tambah.php">Tambah Data</a>


<table class="table table-bordered data-table">

    <thead>	

	      <th>No</th>

	      <th width="200px">Opsi</th>

	      <th>Id</th>

	      <th>username</th>

	      <th>telp</th>

	      <th>email</th>

    </thead>


	
	<?php $i = 1; ?>
<?php foreach( $siswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>

			<a href="ubah.php?Id=<?= $row["Id"]; ?>">ubah</a> |
			<a href="hapus.php?Id=<?= $row["Id"]; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a>
			
		</td>
		<td><?= $row["Id"]; ?></td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["telp"]; ?></td>
		<td><?= $row["email"]; ?></td>
	</tr>
	<?php $i++; ?>
    <?php endforeach; ?> 

</table>

</body>
</html>