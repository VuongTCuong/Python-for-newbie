<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="themify-icons/themify-icons.css">
    <link rel="icon" href="/Web_2/image/icontitle.png" type="image/x-icon">
    <title>TNC Apple Store</title>
</head>
<?php
    require_once('login_session.php');
    $conn=mysqli_connect('localhost','root','','web2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $name=$_SESSION['current_username'];
    $stm='select sanpham.hinhSP, sanpham.tenSP, giohang.soluong , giohang.tongGia
    from giohang 
    inner join sanpham
    where giohang.tennguoidung="' . $name .'" and sanpham.tenSP=giohang.tenSP' ;   
    $result=mysqli_query($conn,$stm);
    $sum=0;
    while($row=mysqli_fetch_assoc($result)){        
        $sum+=$row['tongGia'];
    }
    $stm='select * from nguoidung where username="'.$name.'"' ;
    $result = mysqli_query($conn,$stm);
    $row=mysqli_fetch_assoc($result);


?>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <a href="index.html"><img src="/Web_2/image/apple.svg" alt="apple-store"></a>
        </div>
        <div class="menu">
            <li><a href="">Store</a>
                <ul class="submenu">
                    <li><a href="">New Arrival</a></li>
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
    <!-- Delivery -->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-delivery delivery-top-item">
                        <i class="ti-shopping-cart"></i>
                    </div>
    
                    <div class="delivery-top-address delivery-top-item">
                        <i class="ti-location-pin"></i>
                    </div>
    
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="ti-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <form method="post" action="payment_action.php?sum=<?=$sum?>">
                    <p>Phương thức thanh toán</p>
                        <div class="delivery-content-left-khachle row">
                            <input name="pttt" type="radio"  required="" value="Online" checked>
                            <p style="font-style:bold;">Online</p>
                        </div>
                        <div class="delivery-content-left-khachle row">
                            <input name="pttt" type="radio"  required="" value="COD" >
                            <p style="font-style:bold;">COD</p>
                        </div>
                          
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Full Name<span style="color:red">*</span></label>
                            <input name="ten" name="ten" type="text" value="<?=$row['hovaten']?>">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Phone Number <span style="color:red">*</span></label>
                            <input type="text" name="sdt" value="<?=$row['sdt']?>">
                        </div>
                        
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Address<span style="color:red">*</span></label>
                        <input type="text" name="diachi"value="<?=$row['diachi']?>">
                    </div>
                    <div class="delivery-content-left-button row">
                        <p></p>
                        <button type="submit"><p style="font-weight: bold;">PROCEED TO PAYMENT</p></button>
                       
                    </div>
                    </form>
                </div> 
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TOTAL</th>
                        </tr>
                        <tr>
                            <td>Products:</td>
                            <td></td>
                        </tr>
                        <?php
                            $stm='select sanpham.hinhSP, sanpham.tenSP, giohang.soluong , giohang.tongGia
                            from giohang 
                            inner join sanpham
                            where giohang.tennguoidung="' . $name .'" and sanpham.tenSP=giohang.tenSP' ;   
                            $result=mysqli_query($conn,$stm);
                            while($row=mysqli_fetch_assoc($result)){        
                                echo '<tr>';
                                echo '<td></td>';
                                echo '<td>'.$row['tenSP'].'*'.$row['soluong'].'</td>';
                                echo '</tr>';
                            }
                        ?>
                        <tr>
                            <td>Total Price: </td>
                            <?php
                                echo '<td><p>'.$sum.' vnđ</p></td>';
                            ?>   
                        </tr> 
                    </table>
                </div>
            </div>
           
        </div>
    </section>





    <!-- Footer -->
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
<script>
    const header = document.querySelector("header")
    window.addEventListener("scroll",function(){
        check = window.pageYOffset
        if (check > 0)
        {
            header.classList.add("sticky")
        }else{
            header.classList.remove("sticky")
        }
    })
    
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let index = 0
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click",function(){
        slider(index)
        })
    })
    function imgSlide(){
        index++;
        if(index >= imgNumber) {index=0}
        slider(index)
    }
    function slider(index) {
        imgContainer.style.left = "-" +index*100+ "%"
        const dotActive = document.querySelector(".active")
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide, 3000)
    
    // const itemsliderbar = document.querySelectorAll(".categories-left-li")
    // itemsliderbar.forEach(function(menu,index){
    //     menu.addEventListener("click",function(){
    //         menu.classList.toggle("block")
    //     })
    // })
    </script>
</html>