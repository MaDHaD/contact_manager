
<?php

require_once('../app/connect.php');
require_once('../app/select_con_app.php');



?>


<html>
<head>

</head>
<body>


<script language="JavaScript">
    function allchek(source) {
        checkboxes = document.getElementsByName('select[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>



<form method="post">

    <div align="center" >

        <table cellpadding="4" >


            <?php if(count($res)){  ?>

            <tr>
                <td colspan="3" align="right"><input type="submit" name="accept" value="Accept"> <input type="submit" name="cancel" value="Cancel"></td>

                <td></td>

                <td colspan="4" align="right"><p> SELECTION MAIN PAGE</p></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6" valign="bottom">All</td>
            </tr>

            <tr>
                <td></td>
                <td><input type="checkbox" onClick="allchek(this)" /></td>
                <td><a href="" name="last">Last</a></td>
                <td><a href="" name="first">First</a></td>
                <td><b>Email</b></td>
                <td><b>Best Phone</b></td>
            </tr>

            <tr> <?php }    for($i=0; $i<count($res); $i++) {?>
                <td></td>
                <td><input type="checkbox" name="select[]" value="<?php echo $res[$i]['email']?>"></td>
                <td><?php echo $res[$i]['last_name']?></td>
                <td><?php echo $res[$i]['first_name']?></td>
                <td><?php echo $res[$i]['email']?></td>
                <td><?php echo $res[$i]['home_phone']?></td>



            </tr>
        <?php }   ?>

            <tr>
                <td colspan="3" align="right"><input type="submit" name="accept" value="Accept"> <input type="submit" name="cancel" value="Cancel"></td>

            </tr>


        </table>

    </div>


</form>

</body>
</html>