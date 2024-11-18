<?php 
    if(isset($_POST['submit'])){
        if(isset($_POST['blood']))
        {
            $blood = $_POST['blood'];
        
            echo "Successful. You chose: ".$blood;

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