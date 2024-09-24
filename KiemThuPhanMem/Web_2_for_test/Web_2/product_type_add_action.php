<?php
    $conn=mysqli_connect('localhost','root','','web2');
    
    $type=$_POST['type'];
    
    $stm="insert into loaisanpham values (NULL,'" .$type . "')";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location: product-type-add.php');
?>