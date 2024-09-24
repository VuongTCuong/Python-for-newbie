<?php
    $conn=mysqli_connect('localhost','root','','web2');
    $id=$_POST['id'];
    $stm="delete from sanpham where id='" .$id . "'";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location: manage-products.php');
?>