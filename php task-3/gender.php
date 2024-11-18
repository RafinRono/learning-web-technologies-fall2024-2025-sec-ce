<?php 
    if(isset($_POST['submit'])){
        if(isset($_POST['gender']))
        {
            $gender = $_POST['gender'];
        
            $gender = trim($gender);
            echo "Successful. You chose: ".$gender;

        }
        else
        {
            echo "Nothing was chosen";
        }
    }
    else{
        echo "invalid request!";
    }

?>