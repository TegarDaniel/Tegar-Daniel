<?php
include('koneksi.php');

$nama = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(empty($nama)){
    echo "<script> alert ('Nama tidak boleh kosong'); location.href='index.php';</script>";
} elseif(empty($email)){
    echo "<script> alert ('Email tidak boleh kosong'); location.href='index.php';</script>";
} elseif(empty($subject)){
    echo "<script> alert('subject tidak boleh kosong'); location.href='index.php';</script>";
} elseif(empty($message)){
    echo "<script> alert('message tidak boleh kosong'); location.href='index.php';</script>";
} else {
    $insert = mysqli_query($conn, "insert into data(nama, email, subject, pesan) value
    ('".$nama."', '".$email."', '".$subject."', '".$message."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script> alert ('Sukses mengirim'); location.href='index.php';</script>";
        header('index.php');
    } else {
        echo "<script> alert ('Gagal mengirim'); location.href='index.php';</script>";
        header('index.php');
    }
}

?>