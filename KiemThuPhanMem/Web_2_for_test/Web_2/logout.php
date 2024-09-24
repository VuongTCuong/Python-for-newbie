<?php
	require_once('login_session.php');
	if(isset($_REQUEST['isAdmin'])) {
		unset($_SESSION['current_username']);
		unset($_SESSION['isAdmin']);
		header('Location: index.php');
	}
	if(isset($_REQUEST['isUser'])) {
		unset($_SESSION['current_username']);
		unset($_SESSION['isUser']);
		header('Location: index.php');
	}
?>