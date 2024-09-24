<?php
    require_once('login_session.php');
    require_once('donhang_session.php');
    $name=$_SESSION['current_username'];
    $conn=mysqli_connect('localhost','root','','web2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $ten=$_REQUEST['ten'];
    $sdt=$_REQUEST['sdt'];
    $diachi=$_REQUEST['diachi'];
    
    $stm="update nguoidung set hovaten='". $ten ."',sdt='" .$sdt ."',diachi='".$diachi."' where username='".$name ."'";
    mysqli_query($conn,$stm);
    
    $sum=$_REQUEST['sum'];
    $Odate=date("d/m/Y");
    $pttt=$_POST['pttt'];

    $stm="insert into donhang values(".$_SESSION['sodonhang'].",'".$name."','".$Odate."','_',".$sum.",'" .$pttt."','Đang xét')";
    mysqli_query($conn,$stm);

    $stm="select * from giohang where tennguoidung='" .$name."'";
    $result=mysqli_query($conn,$stm);
    while($r=mysqli_fetch_assoc($result)){
        $st="insert into chitietdonhang values(".$_SESSION['sodonhang'].",'".$name."','".$r['tenSP']."',".$r['soluong'].",".$r['tongGia'].")";
        mysqli_query($conn,$st);
    }
    ++$_SESSION['sodonhang'];
    $stm="delete from giohang where tennguoidung='" .$name ."'";
    mysqli_query($conn,$stm);
    mysqli_close($conn);
    header('location: cart.php');
?>