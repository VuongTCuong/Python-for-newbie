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
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="web2";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['search_input'])) $search=$_POST['search_input'];
    else $search="";

    if(isset($_REQUEST['loai'])) $loai=$_REQUEST['loai'];
    else $loai="";


    if(isset($_REQUEST['from']) && isset($_REQUEST['to'])) {
        $from=$_REQUEST['from'];
        $to=$_REQUEST['to'];
    }
    else {
        $from="";
        $to="";
    }
    if($loai!=""){
        $stm = "select * from sanpham where tenSP like '%" . $search . "%' and loaiSP='" .$loai."'";
    }
    else{
        if($from!="" && $to!=""){
            $stm = "select * from sanpham where giaSP>=". $from ." and giaSP<=" .$to;
        }
        else{
            $stm = "select * from sanpham where tenSP like '%" . $search . "%'";
        }
    }
    $result = mysqli_query($conn,$stm);
?>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <a href="index.php"><img src="/Web_2/image/apple.svg" alt="apple-store"></a>
        </div>
        <div class="menu">
            <li><a href="index.php">Store</a>
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
    <!-- Slider -->
    <section id="Slider">
        <!-- <div class="aspect-ratio-169">
            <img src="/image/slider_iphone_5.jpg">
            <img src="/image/slider_iphone_auto_x2.jpg">
            <img src="/image/slider_iphone_4 (2).jpg">
            
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div> -->
    </section>
    <!-- Categories -->
    <section class="categories">
        <div class="container">
            
        </div>
        <div class="container">
            <div class="row">
                <div class="categories-left">
                <form method = "post" action = "Search-result.php" >
                <input placeholder="Search" name ="search_input"type="text" value="">
                <input type = "submit" value="Search">
                </form>
                <br><br>
                <ul>
                <script>
                    function change(){
                        var id=document.getElementById('change').value;
                        var link="Search-result.php?loai="+id;
                        window.location.href=link;
                    }
                </script>
                    <?php
                        $stm="select * from loaisanpham";
                        $res=mysqli_query($conn,$stm);
                        echo '<b>Phân loại:</b><select id="change" onchange="change();"><li class="categories-left-li">';
                        echo '<option value="">Tất cả</option>';
                        while($rows=mysqli_fetch_assoc($res)){
                            if($rows['loai']==$loai){
                                echo '<option value="'.$rows['loai'].'" selected>'.$rows['loai'].'</option>';
                            }
                            else{
                                echo '<option value="'.$rows['loai'].'">'.$rows['loai'].'</option>';
                            }
                        }
                        echo '</li></select>';
                    ?>
                    <br><br><br>
                <form method="post" action="Search_advance_action.php">
                    <p style="font: size 15px;"><b>Chọn khoảng giá sản phẩm</b></p><br>
                    Từ  <input name="from" type="text" style="width:80px" > <br><br>
                    Đến <input name="to" type="text" style="width:80px"> <br><br>
                    <input type="submit" value="Lọc" style="width: 100px;">
                </form>
                </ul>
                </div>
                <div class="categories-right row">
                    <div class="categories-right-top-item">
                        <p>Tìm kiếm cho từ khóa '<?=$search ?>'</p>
                    </div>
                    <div class="categories-right-top-item">
                        <!-- <button><span>Filter</span> <i class="ti-arrow-down"></i></button> -->
                    </div>
                    <div class="categories-right-content row">
                    <?php
                        
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<form method="post" action="products-details.php" class="categories-right-content-item">
                                    <input type="hidden" name="id_chitiet" value="'.$row['id'] . '">
                                    <img src="/Web_2/image/'. $row['hinhSP'] .'" alt="">
                                    <h1> '. $row['tenSP'] . '</h1>
                                    <p>' . $row['giaSP'] .'<sup>đ</sup></p>
                                    <p> Loại: '. $row['loaiSP'] . '</p></a>
                                    <input type="submit" value = "Chi tiết sản phẩm">
                                    </form> ';
                        }
                    ?>
                    </div>
                </div>        
                <!-- trang -->
                <p style="margin-right:0px; margin-left: auto;">Trang</p>
                <?php

                ?>
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
    // const header = document.querySelector("header")
    // window.addEventListener("scroll",function(){
    //     check = window.pageYOffset
    //     if (check > 0)
    //     {
    //         header.classList.add("sticky")
    //     }else{
    //         header.classList.remove("sticky")
    //     }
    // })
    
    // const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    // const imgContainer = document.querySelector(".aspect-ratio-169")
    // const dotItem = document.querySelectorAll(".dot")
    // let imgNumber = imgPosition.length
    // let index = 0
    // imgPosition.forEach(function(image,index){
    //     image.style.left = index*100 + "%"
    //     dotItem[index].addEventListener("click",function(){
    //     slider(index)
    //     })
    // })
    // function imgSlide(){
    //     index++;
    //     if(index >= imgNumber) {index=0}
    //     slider(index)
    // }
    // function slider(index) {
    //     imgContainer.style.left = "-" +index*100+ "%"
    //     const dotActive = document.querySelector(".active")
    //     dotActive.classList.remove("active")
    //     dotItem[index].classList.add("active")
    // }
    // setInterval(imgSlide, 3000)
    
    // // const itemsliderbar = document.querySelectorAll(".categories-left-li")
    // // itemsliderbar.forEach(function(menu,index){
    // //     menu.addEventListener("click",function(){
    // //         menu.classList.toggle("block")
    // //     })
    // // })
    </script>
</html>