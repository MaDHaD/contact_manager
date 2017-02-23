<?php

require_once('../app/connect.php');
require_once('../app/login_app.php');

?>


<html>
<head>
<body>
<form method="post">

    <div align="center">
        <table>
            <tr>
                <td><input type="text" name="login"></td>

            </tr>
            <tr>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="loginbutton" value="Login"> <a href="register.php">Register</a> </td>
            </tr>
        </table>
    </div>

</form>
</body>
</head>
</html>