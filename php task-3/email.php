<?php 

    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);

        if($email == null){
            echo "Null email";
        }
        else
        {
            echo "Enter a valid emmail";
        }
        
    
    }else{
        echo "invalid request!";
    }

?>