<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="log-in.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <link rel="icon" href="/Web_2/image/icontitle.png" type="image/x-icon">
    <link rel="stylesheet" href="../admin/adminstyle.css">
    <script src="../admin/ckeditor/ckeditor.js"></script>
    <title>TNC Admin Apple Store</title>
</head>
<?php
    require_once('login_session.php');
    $conn=mysqli_connect('localhost','root','','web2');
?>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <a href="index.php"><img src="/Web_2/image/apple.svg" alt="apple-store"></a>
        </div>
        <div class="menu">
            <li><a href="">Store</a>
                <ul class="submenu">
                    <li><a href="">New Arrival</a></li>
                        <li><a href="../products-iphone.html">iPhone</a>
                            <ul><a href="">iPhone 14 series</a></ul>
                            <ul><a href="">iPhone 13 series</a></ul>
                            <ul><a href="">iPhone 12 series</a></ul>
                        </li>
                    </li>
                    <li><a href="../products-ipad.htm">iPad</a>
                        <ul><a href="">iPad Pro</a></ul>
                        <ul><a href="">iPad Mini</a></ul>
                        <ul><a href="">iPad Air</a></ul>
                    </li>
                    <li><a href="../products-mac.html">Mac</a>
                        <ul><a href="">iMac</a></ul>
                        <ul><a href="">Macbook Pro</a></ul>
                        <ul><a href="">Macbook Air</a></ul>
                    </li>
                    <li><a href="../products-airpods.html">AirPods</a>
                        <ul><a href="">AirPods Pro</a></ul>
                        <ul><a href="">AirPods Series</a></ul>
                    </li>
                    <li><a href="../products-applewatch.html">Apple Watch</a>
                        <ul><a href="">Apple Watch Ultra</a></ul>
                        <ul><a href="">Apple Watch Serise 8</a></ul>
                    </li>
                </ul> 
            </li>
            <li><a href="../products-mac.html">Mac</a>
                <ul class="submenu">
                    <li><a href="../products-mac.html">Mac</a>
                        <ul><a href="">iMac</a></ul>
                        <ul><a href="">Macbook Pro</a></ul>
                        <ul><a href="">Macbook Air</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="../products-ipad.htm">iPad</a>
                <ul class="submenu">
                    <li><a href="../products-ipad.htm">iPad</a>
                        <ul><a href="">iPad Pro</a></ul>
                        <ul><a href="">iPad Mini</a></ul>
                        <ul><a href="">iPad Air</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="../products-iphone.html">iPhone</a>
                <ul class="submenu">
                    <li><a href="../products-iphone.html">iPhone</a>
                        <ul><a href="">iPhone 14 series</a></ul>
                        <ul><a href="">iPhone 13 series</a></ul>
                        <ul><a href="">iPhone 12 series</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="../products-applewatch.html">Watch</a>
                <ul class="submenu">
                    <li><a href="../products-applewatch.html">Apple Watch</a>
                        <ul><a href="">Apple Watch Ultra</a></ul>
                        <ul><a href="">Apple Watch Serise 8</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="../products-airpods.html">AirPods</a>
                <ul class="submenu">
                    <li><a href="../products-airpods.html">AirPods</a>
                        <ul><a href="">AirPods Pro</a></ul>
                        <ul><a href="">AirPods Series</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="https://www.apple.com">Support</a>
            <ul class="submenu">
                <li><a href="https://www.apple.com">Support</a>
                <ul><a href="https://www.apple.com">Contact</a></ul>
                <ul><a href="https://www.apple.com">Insurance</a></ul>
                </li>
            </ul></li>
        
        </div>
        <div class="others">
            <form method = "post" action = "Search-result.php" >
            <input placeholder="Search" name ="search_input"type="text" value="">
            <input type = "submit" value="Search">
            </form>
            <?php
                if(isAdminLogged()){
                    echo 'Hello '. $_SESSION['current_username'];
                    echo '<br> <a href="logout.php?isAdmin=1">Đăng xuất</a> ';
                }
                else{
                    if(isUserLogged()){
                        echo 'Hello '. $_SESSION['current_username'];
                        echo '<br> <a href="logout.php?isUser=1">Đăng xuất</a> ';
                        echo '<li><a href="cart.php"><img src="/Web_2/image/bag.svg" alt=""></a></li>';
                    }
                    else {
                        echo '<li><a href="log-in.php"><i class="ti-user"></i></a></li>';
                        echo '<li><a href="log-in.php"><img src="/Web_2/image/bag.svg" alt=""></a></li>';
                    }
                }
            ?>
        </div>
    </header>
              
    <main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container">
                <h1>Edit Product</h1>
                <form action="edit_products_action.php" method="POST"> 
                    <?php
                        $stm="select * from sanpham where id='" .$_REQUEST['id'] ."'";
                        $result=mysqli_query($conn,$stm);
                        $row=mysqli_fetch_assoc($result);
                        echo '<input type="hidden" name="id"  value="'.$row['id'].'">';
                        echo '<input type="text" name="tenSP" placeholder="Tên sản phẩm" value="' .$row['tenSP'].'">';
                        echo '<input type="file" name="hinhSP">';
                        echo '<input type="text" name="giaSP" placeholder="Giá sản phẩm" value="' .$row['giaSP'].'">';;
                    ?>
                    <div>
                    <br>
                    <select name="loaiSP" style="width:340px">
                        <option value="#">Loại sản phẩm</option>
                        <?php
                            $stm="select * from loaisanpham";
                            $res=mysqli_query($conn,$stm);
                            while($rows=mysqli_fetch_assoc($res)){
                                if($rows['loai']==$row['loaiSP']){
                                    echo '<option value="'.$rows['loai'].'" selected>'.$rows['loai'].'</option>';
                                }else{
                                    echo '<option value="'.$rows['loai'].'">'.$rows['loai'].'</option>';
                                }
                            }
                            echo '</select>
                                    </div>
                                    <br>
                                    <input type="text" name="gioithieuSP" placeholder="Giới thiệu sản phẩm" value="'.$row['gioithieuSP'].'">';
                        ?>
    
                    <br><br>
                    <button type="submit" style="width:100px;height:30px">Edit</button>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
