    <?php
    require_once('login_session.php');

    $username=$_POST['user'];
    $password=$_POST['pass'];
    $con=new mysqli('localhost','root','','web2');
    if(!$con) echo 'failed';
    $state="select * from admin where username='". $username ."'";
    $state1="select * from nguoidung where username='".$username ."'";
    $result=mysqli_query($con,$state);
    $result1=mysqli_query($con,$state1);
    if(mysqli_num_rows($result)>=1) {
        $row=mysqli_fetch_assoc($result);
        if($row['password']==$password){
            $_SESSION['current_username']=$username;
            $_SESSION['isAdmin']=true;
            $_SESSION['isUSer']=false;
            header('Location: index.php');
        }
        else{
            echo 'Sai mật khẩu';
        } 
    }
    else{
        if(mysqli_num_rows($result1)>=1){
            $row=mysqli_fetch_assoc($result1);
            if($row['password']==$password){
                $_SESSION['current_username']=$username;
                $_SESSION['isUser']=true;
                $_SESSION['isAdmin']=false;
                header('Location: index.php');
            }
            else{
                echo 'Sai mật khẩu';
            }
        }
        else{
            echo 'Sai tài khoản ';
        }
    }
    mysqli_close($con);
?>