<?php
session_start();
include_once('header.html');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
  background-image: url("index.jpg");
  background-repeat: no-repeat;

}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
</head>
<body>
    <form method='POST' action="logincheck.php">
        <fieldset>
            <legend>LOGIN</legend>
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id=""></td>
                  </tr>
                
                <tr>
                    <hr>
                    <td colspan="2"> <input type="checkbox" name="logche" id=""> Remember me</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value='Submit'><br>
                        <?php
    if(isset($_GET['msg']))
    {
        if($_GET['msg'] == 'invalid_user')
        {
            echo "<h1>Invalid User<h1>";
        } 
    }
?>
                    
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>


<?php

    include_once('footer.html');
?>