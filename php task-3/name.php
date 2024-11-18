<?php 

    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);

        if($name == null){
            echo "Null name. Please try again.";
        }else
        {
            if(is_numeric($name[0]))
                {
                    echo "Cannot start with a number";
                }
                else
                {
                    if((ctype_alpha(str_replace('_', '',str_replace('.', '', $name)))))
                    {
                        echo "successful";
                    }
                    else
                    {
                        echo "Name can contain alphabets or . or _";
                    }
                }
        }
        
    }else{
        echo "invalid request!";
    }
?>