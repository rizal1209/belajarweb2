<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "belajarweb");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = []; 
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
} 


function tambah($data) {
	global $conn;

	$Id = htmlspecialchars($data["Id"]);
	$nama = htmlspecialchars($data["username"]);
	$telp = htmlspecialchars($data["telp"]);
	$email = htmlspecialchars($data["email"]);

	$query = "INSERT INTO data_siswa VALUES ('', '$nama', 'telp', 'email')

			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function hapus($Id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM data_siswa WHERE Id = $Id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

    $id = $data["Id"];
	$Id = htmlspecialchars($data["Id"]);
	$nama = htmlspecialchars($data["username"]);
	$telp = htmlspecialchars($data["telp"]);
	$email = htmlspecialchars($data["email"]);

	$query = "UPDATE data_siswa SET
				Id = '$Id', 
				username = '$nama',
				telp = '$telp', 
				email = '$email'
			WHERE Id = $Id
			 ";
	
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}







?>