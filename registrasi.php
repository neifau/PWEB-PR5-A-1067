<?
require 'index.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$query_sql = "INSERT INTO akun_user (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($koneksi, $query_sql)){
    header("Location: registrasi.php");
} else {
    echo "Pendaftaran Gagal" . mysqli_error($koneksi);
}
?>