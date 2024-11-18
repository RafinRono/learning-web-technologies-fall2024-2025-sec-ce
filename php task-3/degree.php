<?php 
    if(isset($_POST['submit'])){
        if(isset($_POST['degree']))
        {
            if(count($_POST['degree'])>=2)
            {
                echo "Correct selection";
            }
            else
            {
                echo "Choose at least 2 options";
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