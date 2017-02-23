
<?php

require_once('app/connect.php');
require_once('app/index_app.php');




?>


<html>
    <head>
hello world
    </head>
        <body>
            Welcome <?php echo $_SESSION['user_name'] ?> <a href="../app/logout_app.php">Logout</a>
      
            <form method="post">

                <div align="center" >

                    <table cellpadding="5">


                        <?php if(count($res)){  ?>
                        <tr>
                            <td><input type="submit" name="add" value="ADD"></td>
                            <td><input type="submit" name="event" value="MAKE EVENT"></td>
                            <td colspan="7" align="right"><p><b>MANAGMENT MAIN PAGE</b> </p></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>

                            <td><a href="index.php?ln=<?php echo $sort_ln ?>" name="last">Last</a></td>
                            <td><a href="index.php?fn=<?php echo $sort_fn ?>" name="first">First</a></td>
                            <td><b>Email</b></td>
                            <td><b>Best Phone</b></td>
                        </tr>

                        <tr> <?php }    for($i=0; $i<count($res); $i++) {?>


                        <td><?php echo $res[$i]['last_name']?></td>
                        <td><?php echo $res[$i]['first_name']?></td>
                        <td><?php echo $res[$i]['email']?></td>
                        <td><?php echo $res[$i][$res[$i]['selected_phone']]?></td>

                        <td><a href="view/edit.php?id=<?php echo $res[$i]['id']?>">edit/view</a></td>

                        <td><a href="view/delete.php?id=<?php echo $res[$i]['id']?>">delete </a></td>

                        </tr>
                       <?php }  ?>

                        <tr>
                        <td><input type="submit" name="add" value="ADD"></td> </tr>


                    </table>

                </div>


            </form>

        </body>
</html>