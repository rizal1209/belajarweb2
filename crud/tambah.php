<?php 
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {


	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
         	<script>
         		alert('data berhasil ditambahkan!');
         		document.location.href = 'index.php';
         	</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>

		";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Tambah Data</h1>



</body>
</html>