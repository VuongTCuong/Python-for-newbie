<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="web2";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $hoten=$_POST['hoten'];
    $email=$_POST['email'];
    $diachi=$_POST['diachi'];
    $stm = "insert into nguoidung values (NULL,'".$user. "','" .$pass . "','" . $hoten ."','" . $email ."','" .$diachi."','Unlock')";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location: index.php');
?>