<?php 
    if(isset($_POST['submit'])){
        if(isset($_POST['blood']))
        {
            $blood = $_POST['blood'];
            if ($blood != null)
            {
                echo "Successful. You chose: ".$blood;
            }
            else
            {
                echo "Choose an option first";
            }
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