<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","liloteknik");

// membuat function tambah
function tambah($data) {
	global $conn;
    $nama = htmlspecialchars($data["nama"]);  
    $telp = htmlspecialchars($data["telp"]);  
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);  
    $barang = htmlspecialchars($data["barang"]);  
    $merk = htmlspecialchars($data["merk"]);  
    $type = htmlspecialchars($data["type"]);
    $jumlah = htmlspecialchars($data["jumlah"]);  
    $pesan = htmlspecialchars($data["pesan"]);  

  // $query insert data
  	$query = " INSERT INTO pemesanan VALUES ('', '$nama', '$telp', '$email', '$alamat', '$barang', '$merk', '$type', '$jumlah', '$pesan') ";

  	mysqli_query($conn, $query);

  	return mysqli_affected_rows($conn);
}

?>