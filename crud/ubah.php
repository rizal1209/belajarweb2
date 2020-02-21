<?php 
require 'functions.php';

// ambil data di URL
$Id = $_GET["Id"];

// query data data_siswa berdasarkan Id
$dts = query("SELECT * FROM data_siswa  WHERE Id = $Id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {


	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
         	<script>
         		alert('data berhasil diubah!');
         		document.location.href = 'index.php';
         	</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>

		";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Siswa</title>
</head>
<body>
	<h1>Ubah Data</h1>

	<form action="" method="post"> 
	    <input type="hidden" name="Id" value="<?= $dts["Id"]; ?>">
		<ul>
			<li>
				<label for="Id">Id</label>
				<label>:</label>
				<input type="text" name="Id" Id="Id" value="<?= $dts["Id"]; ?>">
			</li>
			<li>
				<label for="username">username</label>
                <label>:</label>
				<input type="text" name="username" Id="username" value="<?= $dts["username"]; ?>">
			</li>
			<li>
				<label for="telp">Telp</label>
				<label>:</label>
				<input type="text" name="telp" id="telp" value="<?= $dts["telp"]; ?>">
			</li>
			<li>
				<label for="email">Email</label>
				<label>:</label>
				<input type="text" name="email" id="email" value="<?= $dts["email"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit"> Simpan Perubahan!</button>
			</li>
		</ul>


	</form>


</body>
</html>