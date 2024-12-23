<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $check = isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && $_REQUEST['dob'] != null && isset($_REQUEST['gender']) && isset($_REQUEST['degree']) && isset($_REQUEST['blood']);
        if($check)
        {
            $_SESSION['name'] = trim($_REQUEST['name']);
            $_SESSION['email'] = trim($_REQUEST['email']);
            $_SESSION['password'] = trim($_REQUEST['password']);
            $_SESSION['dob'] = $_REQUEST['dob'];
            $_SESSION['degree'] = $_REQUEST['degree'];
            $_SESSION['gender'] = trim($_REQUEST['gender']);
            $_SESSION['blood'] = $_REQUEST['blood'];

            //echo "okay";
            header('location: login.html');  
        }
        else
        {
            echo "Enter all the fields accordingly";
        }
        
    }else{
        echo "invalid request!";
    }
?>