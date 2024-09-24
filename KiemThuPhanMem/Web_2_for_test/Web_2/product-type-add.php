<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <link rel="icon" href="/Web_2/image/icontitle.png" type="image/x-icon">
    <link rel="stylesheet" href="../admin/adminstyle.css">
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

    <section class="categories">
        <div class="container">
            <div class="categories-top row">
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="categories-left">
                    <ul>
                        <li class="categories-left-li">
                            <button style="width: 80%;
                            padding: 10px 15px;
                            margin-left: 25px;
                            display: flex;
                            justify-content: space-between;
                            background-color: #fff;
                            border: 1px solid #dddddd;
                            cursor: pointer;"><a href="product-type-add.php">+ Add Product Type</a></button>

                        </li>
                        <?php
                            $stm="select * from loaisanpham";
                            $res=mysqli_query($conn,$stm);
                            while($rows=mysqli_fetch_assoc($res)){
                                echo '<li class="categories-left-li"><a href="index.php?name='.$rows['loai'] .'">'.$rows['loai'].'</a></li>';
                            }
                        ?>
                        
                    </ul>
                </div>
                <div style="padding-bottom: 500px; padding-left: 50px; padding-top: -10px;" class="admin-content-right">
                    <div class="admin-content-right-cartegory_add">
                        <h1> Add Product Type</h1>
                        <br>
                        <form action="product_type_add_action.php" method="POST">
                            <input type="text" placeholder="Type of Products" name="type">
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>         
            </div>
        </div>    
    </div>
    </section>
    <!-- <section class="admin-content">
        <div style="padding-top: 200px; padding-left: 500px; padding-bottom: 400px ;" class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1> Add Product Type</h1>
                <form action="" method="POST">
                    <input type="text" placeholder="Type of Products">
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
    </section> -->

    <div class="footer-top">
        <li><a href="">Contact</a></li>
        <li><a href="">Insurance</a></li>
        <li><a href="">About Us</a></li>
        <li>
            <a href="https://www.facebook.com/apple" target="_blank"><i class="ti-facebook"></i></a>
            <a href="https://www.youtube.com/user/Apple" target="_blank"><i class="ti-youtube"></i></a>
            <a href="https://www.instagram.com/apple/" target="_blank"><i class="ti-instagram"></i></a>
        </li>
    </div>
    <div class="footer-center">
        <p>
            Công Ty Cổ Phần Thuận Nam Cường Group với số đăng ký kinh doanh: 0206888760 <br>
            Địa chỉ Đăng Ký: Đại học Sài Gòn, Thành Phố Hồ Chí Minh <br>
            Liên hệ với chúng tôi: <b>092 883 912</b>
        </p>
    </div>
    <div class="footer-bottom">
        ©TNCGroup All rights reserved
    </div>
</body>
</html>