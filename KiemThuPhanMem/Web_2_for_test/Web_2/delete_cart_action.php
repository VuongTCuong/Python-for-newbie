<?php
    require_once('login_session.php');
    $conn=mysqli_connect('localhost','root','','web2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $tenSP=$_POST['tenSP'];
    $name=$_SESSION['current_username'];
    $stm="delete from giohang where tennguoidung='".$name."' and tenSP='".$tenSP."'";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    $location='location:cart.php?name='.$name;
    header($location);
?>