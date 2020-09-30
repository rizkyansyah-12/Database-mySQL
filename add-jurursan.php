<?php
$conn = mysqli_connect('localhost','root', '', 'db_mahasiswa');
$result = mysqli_query($conn, "SELECT * FROM jurusan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Jurusan</title>
</head>
<body>
	<form action="" method="POST">
		<label for="jur">jurusan</label>
		<input type="text" id="Jur" name="jurusan">
		<br>
		<button type= "submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['Submit'])){
	$jurusan = $_POST['jurusan'];
	$sql= mysqli_query($conn, "INSERT INTO Jurusan (nama, create_at,update_at) values ('$jurusan', '','')");
	if ($sql) {
		echo "Data berhasil disimpan!";
	}else{
		echo "data gagal disimpan";
	}
}
?>