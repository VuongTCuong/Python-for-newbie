<?php
    $conn=mysqli_connect('localhost','root','','web2');
   
    $id=$_POST['id'];
    $ten=$_POST['tenSP'];
    $hinh=$_POST['hinhSP'];
    $gioithieu=$_POST['gioithieuSP'];
    $gia=$_POST['giaSP'];
    $loai=$_POST['loaiSP'];
    $stm="update sanpham set tenSP='".$ten."',hinhSP='".$hinh."',gioithieuSP='".$gioithieu."',giaSP=".$gia.",loaiSP='".$loai."' where id=" .$id;
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location:index.php');
?>
?>