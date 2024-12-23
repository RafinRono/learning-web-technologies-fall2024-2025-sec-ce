<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $_SESSION['login_name'] = $_REQUEST['login_name'];
        $_SESSION['login_password'] = $_REQUEST['login_password'];

        $login_name = trim($_SESSION['login_name']);
        $login_password = trim($_SESSION['login_password']);

        $name = trim($_SESSION['name']);
        $password = trim($_SESSION['password']);

        if($login_name == null || empty($login_password)){
            //header('location: login.html');  
            echo "empty fields";
        }else
        {
            if($login_password == $password){
                echo "valid user";
                $_SESSION['status'] = true;
                //$_SESSION['username'] = $username;
                header('location: home.php');
            }
            else
            {
                echo "not registered";
            }
        }
    }
    else{
        echo "invalid request!";
        header('location: login.html');
    }

?>