<?php
    $conn=mysqli_connect('localhost','root','','web2');

    $ten=$_POST['tenSP'];
    $hinh=$_POST['hinhSP'];
    $gioithieu=$_POST['gioithieuSP'];
    $gia=$_POST['giaSP'];
    $loai=$_POST['loaiSP'];
    $stm="insert into sanpham values (NULL,'".$ten."','".$hinh."','".$gioithieu."',".$gia.",'".$loai."')";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location:index.php');
?>