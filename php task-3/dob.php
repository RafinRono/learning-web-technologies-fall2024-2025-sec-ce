<?php 

    if(isset($_POST['submit'])){
        $dob = $_POST['dob'];
        if($dob != null)
        {
            $dob = trim($dob);

            $dob = explode( '-' , $dob );

            if( !($dob[0]<=1998 && $dob[0]>=1953) && ($dob[1]<=12 && $dob[1]>=1) && ($dob[2]<=31 && $dob[1]>=1))
            {
                echo "Year must be between 1953-1998<br>And date must be valid as well as the month";
            }
            else
            {
                echo "Sucessful";
            }
        }
        else
        {
            echo "Null date entered";
        }
    
    }else{
        echo "invalid request!";
    }

?>