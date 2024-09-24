<?php

    $conn=mysqli_connect('localhost','root','','web2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id=$_POST['id'];
    $ten=$_POST['ten'];
    $ngaygiao=$_POST['ngaygiao'];
    $trangthai=$_POST['trangthai'];
    
    $stm="update donhang set ngaygiao='".$ngaygiao."',trangthai='".$trangthai."' where id=" .$id ." and tennguoidung='".$ten."'";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location: manage-bill.php');
?>