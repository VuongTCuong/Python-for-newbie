<?php
    require_once('login_session.php');
    $stm="select * from donhang";
    $name=$_SESSION['current_username'];
    $conn=mysqli_connect('localhost','root','','web2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $stm="select * from donhang where tennguoidung='" .$name ."'";
    $result=mysqli_query($conn,$stm);
    $rows=mysqli_num_rows($result);
    $_SESSION['sodonhang']=$rows+1;
    mysqli_close($conn);
?>