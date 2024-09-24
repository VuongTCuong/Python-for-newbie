<?php
    session_start();
    
    function isAdminLogged() {
        if(isset($_SESSION['current_username'])) {
            //var_dump($_SESSION['isAdmin']);
            if ($_SESSION['isAdmin'] == true)
                return true;
        }
        
        return false;
    }
    function isUserLogged() {
        if(isset($_SESSION['current_username'])) {
            //var_dump($_SESSION['isAdmin']);
            if ($_SESSION['isUser'] == true)
                return true;
        }
        
        return false;
    }
?>