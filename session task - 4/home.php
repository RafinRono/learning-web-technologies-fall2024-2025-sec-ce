<?php
    session_start();
    if(isset($_SESSION['status'])){
        echo "logged in";

        //header('location: login.html');  
?>

<html>
    <title>
        HOME
    </title>
    <body>
        <table border="1" cellspacing="0" align="center">
            <form method="post" action="registration.php" enctype="">
                <tr>
                    <td width="400" align="center" colspan="3">
                        <h2>
                            Person Profile
                        </h2>
                    </td>
                </tr>
                <tr height="40">
                    <td>
                        Name 
                    </td>
                    <td>
                        <?=$_SESSION['name']?>
                    </td>
                </tr>
                <tr height="40">
                    <td>
                        Email 
                    </td>
                    <td>
                        <?=$_SESSION['email']?>
                    </td>

                </tr>
                <tr height="40">
                    <td>
                        Gender
                    </td>
                    <td>
                        <?=$_SESSION['gender']?>
                    </td>

                </tr>
                <tr height="40">
                    <td>
                        Date of Birth
                    </td>
                    <td>
                        <?=$_SESSION['dob']?>
                    </td>
                </tr>
                <tr height="40">
                    <td>
                        Blood Group
                    </td>
                    <td>
                        <?=$_SESSION['blood']?> 
                    </td>
                </tr>
                <tr height="40">
                    <td>
                        Degree
                    </td>
                    <td>
                    <?php
                    foreach ($_SESSION['degree'] as $x) {
                    echo "$x <br>";
                    }
                    ?>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr height="40">
                    <td colspan="3" align="center">
                    <a href="logout.php"> logout </a>
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>

<?php
    }
    else
    {
        echo "logged off";
        //header('location: login.html');  
    }
?>
