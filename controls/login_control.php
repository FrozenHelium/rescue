<?php

$user = $GLOBALS['g_user'];

if((isset($_POST['un']) && isset($_POST['psss'])) ){
    $username = $_POST['un'];
	$password = $_POST['psss'];
	if ($user -> Login($username, $password) == true ) {
        //$GLOBALS['g_adminPage']->SetUser($user);
        $userType = $user->GetUserType();
        if($userType == 2){
            header("Location: index.php?page=admin");
        }else if($userType == 1){
            header("Location: index.php?page=official");
        }else{

        }
    }else{echo 'oops! something went wrong :/';}
}else if($user->LoggedIn()){
    $userType = $user->GetUserType();
    if($userType == 2){
        header("Location: index.php?page=admin");
    }else if($userType == 1){
        header("Location: index.php?page=official");
    }else{

    }
}


?>
