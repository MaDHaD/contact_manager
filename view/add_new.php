<?php

require_once("../app/connect.php");
require_once('../app/add_new_app.php');


?>

<html>
    <head>

    </head>
        <body>
            <form  method="post">
              <div align="center">

                  <?php if(count($un_email)){ ?>
                  <table>
                      <tr>
                          <td colspan="2">
                              Message has been send!
                          </td>
                      </tr><tr>
                          <td colspan="2">
                              This address is not in your contact manager
                          </td>

                      </tr>
                      <tr>
                          <td></td>
                      </tr>

                      <tr><?php
                          } for($i=0; $i<count($un_email); $i++ ){

                           ?>
                          <td align="center"><input type="checkbox" name="chek[]" value="<?php echo $un_email[$i]; ?>"></td>
                          <td><?php echo $un_email[$i]; ?></td>


                      </tr>
                      <?php }?>


                      <tr>
                          <td colspan="2"><input type="submit" name="add" value="ADD"></td>

                      </tr>
                      <tr>
                          <td colspan="2"><a href="../index.php">Back to Main Page</a> </td>
                      </tr>

                  </table>
              </div>
            </form>
        </body>
</html>