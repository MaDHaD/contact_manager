<?php

    require_once('../app/connect.php');
    require_once('../app/register_app.php');

?>


<html>
    <head>
            <body>
                <form method="post">
                    <div align="center">
                        <table>
                            <tr>

                                <td><input type="text" name="login" placeholder="Login"></td>
                            </tr>
                            <tr>

                                <td><input type="password" name="password" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td align="right"><input type="submit" name="register" value="Register"></td>
                            </tr>
                        </table>
                    </div>

                </form>
            </body>
    </head>
</html>