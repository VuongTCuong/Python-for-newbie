<?php
    require_once('login_session.php');
    $conn=mysqli_connect('localhost','root','','web2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $soluong=$_POST['quantity'];
    $tenSP=$_POST['tenSP'];
    $giaSP=$_POST['giaSP'];
    $stm="insert into giohang values(NULL,'" .$_SESSION['current_username'] ."','" .$tenSP."'," . $soluong .",". $soluong*$giaSP .")"; 
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    $location='location:cart.php';
    header($location);
?>