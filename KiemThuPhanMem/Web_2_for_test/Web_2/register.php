<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNC Apple Store</title>
    <link rel="stylesheet" href="log-in.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/icontitle.png" type="image/x-icon">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <a href="index.php"><img src="/Web_2/image/apple.svg" alt="apple-store"></a>
        </div>
        <div class="menu">
            <li><a href="index.php">Store</a>
                <ul class="submenu">
                    <li><a href="index.html">New Arrival</a></li>
                        <li><a href="products-iphone.html">iPhone</a>
                            <ul><a href="">iPhone 14 series</a></ul>
                            <ul><a href="">iPhone 13 series</a></ul>
                            <ul><a href="">iPhone 12 series</a></ul>
                        </li>
                    </li>
                    <li><a href="products-ipad.htm">iPad</a>
                        <ul><a href="">iPad Pro</a></ul>
                        <ul><a href="">iPad Mini</a></ul>
                        <ul><a href="">iPad Air</a></ul>
                    </li>
                    <li><a href="products-mac.html">Mac</a>
                        <ul><a href="">iMac</a></ul>
                        <ul><a href="">Macbook Pro</a></ul>
                        <ul><a href="">Macbook Air</a></ul>
                    </li>
                    <li><a href="products-airpods.html">AirPods</a>
                        <ul><a href="">AirPods Pro</a></ul>
                        <ul><a href="">AirPods Series</a></ul>
                    </li>
                    <li><a href="products-applewatch.html">Apple Watch</a>
                        <ul><a href="">Apple Watch Ultra</a></ul>
                        <ul><a href="">Apple Watch Serise 8</a></ul>
                    </li>
                </ul> 
            </li>
            <li><a href="products-mac.html">Mac</a>
                <ul class="submenu">
                    <li><a href="products-mac.html">Mac</a>
                        <ul><a href="">iMac</a></ul>
                        <ul><a href="">Macbook Pro</a></ul>
                        <ul><a href="">Macbook Air</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="products-ipad.htm">iPad</a>
                <ul class="submenu">
                    <li><a href="products-ipad.htm">iPad</a>
                        <ul><a href="">iPad Pro</a></ul>
                        <ul><a href="">iPad Mini</a></ul>
                        <ul><a href="">iPad Air</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="products-iphone.html">iPhone</a>
                <ul class="submenu">
                    <li><a href="products-iphone.html">iPhone</a>
                        <ul><a href="">iPhone 14 series</a></ul>
                        <ul><a href="">iPhone 13 series</a></ul>
                        <ul><a href="">iPhone 12 series</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="products-applewatch.html">Watch</a>
                <ul class="submenu">
                    <li><a href="products-applewatch.html">Apple Watch</a>
                        <ul><a href="">Apple Watch Ultra</a></ul>
                        <ul><a href="">Apple Watch Serise 8</a></ul>
                    </li>
                </ul>
            </li>
            <li><a href="products-airpods.html">AirPods</a>
                <ul class="submenu">
                    <li><a href="products-airpods.html">AirPods</a>
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
            <li><input placeholder="Search" type="text"></li>
            <li><a href="Search-result_iPhone.html"><img src="/Web_2/image/icons8-search-30.png" alt="" style="height: 19.5px;"></a></li>
            <li><a href="log-in.php"><img src="/Web_2/image/icons8-account-50.png" alt="" style="height: 19.5px ;"></a></li>
            <li><a href="cart.php"><img src="/Web_2/image/bag.svg" alt=""></a></li>
        </div>
    </header>

    <main>
        <div class="row">
            
            <div class="colm-form">
                
                <div class="form-container">
                    <center><h1>Đăng ký tài khoản mới</h1></center>
                    <br>
                    <form action="register_action.php" method="post">
                        <input type="text" name="username" placeholder="Tài khoản" required>
                        <input type="password" name="password" placeholder="Mật khẩu" required>
                        <input type="text" name="hoten" placeholder="Họ và tên" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="diachi" placeholder="Địa chỉ" required>
                        <input class = "btn-new" type="submit" value="Đăng ký">
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>