<?php 
$conn = mysqli_connect('localhost','root', '', 'db_mahasiswa');

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id = $id ";

if (mysqli_query($conn, $sql)){
    echo "Record delete successfully";
    header('location: tugas/mahasiswa.php');
} else{
    echo "Error deleting reecord: " . mysqli_error($conn);
}
?>