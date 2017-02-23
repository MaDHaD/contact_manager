<?php

require_once("../app/connect.php");
require_once('../app/edit_app.php');



?>
<html>
<head>

</head>
<body>
<form method="post">
    <div align="center">
        <p><b>Contact Details</b></p>
        <table>
            <tr>
                <td colspan="2">First</td>
                <td><input type="text" name="first_name" value="<?php echo $fedit['first_name']?>" ></td>
            </tr>

            <tr>
                <td colspan="2">Last</td>
                <td><input type="text" name="last_name" value="<?php echo $fedit['last_name']?>"></td>
            </tr>

            <tr>
                <td colspan="2">Email</td>
                <td><input type="text" name="email" value="<?php echo $fedit['email']?>"></td>
            </tr>
            <tr>
                <td>Home</td>
                <td><input type="radio" name="select" value="home_phone" <?php if($fedit['selected_phone'] == 'home_phone'){echo 'checked';} ?> ></td>
                <td><input type="text" name="home_phone" value="<?php echo $fedit['home_phone']?>" ></td>
            </tr>
            <tr>
                <td>Work</td>
                <td><input type="radio" name="select" value="work_phone" <?php if($fedit['selected_phone'] == 'work_phone'){echo 'checked';} ?>></td>
                <td><input type="text" name="work_phone" value="<?php echo $fedit['work_phone']?>"> </td>
            </tr>
            <tr>
                <td>Cell</td>
                <td><input type="radio" name="select" value="cell_phone" <?php if($fedit['selected_phone']== 'cell_phone'){echo 'checked';}?>></td>
                <td><input type="text" name="cell_phone" value="<?php echo $fedit['cell_phone']?>"> </td>
            </tr>
            <tr>
                <td colspan="2">Address 1</td>
                <td><input type="text" name="address1" value="<?php echo $fedit['address1']?>"> </td>
            </tr>
            <tr>
                <td colspan="2">Address 2</td>
                <td><input type="text" name="address2" value="<?php echo $fedit['address2']?>"> </td>
            </tr>
            <tr>
                <td colspan="2">City</td>
                <td><input type="text" name="city" value="<?php echo $fedit['city']?>"> </td>
            </tr><tr>
                <td colspan="2">State</td>
                <td><input type="text" name="state" value="<?php echo $fedit['state']?>"> </td>
            </tr><tr>
                <td colspan="2">Zip</td>
                <td><input type="text" name="zip" value="<?php echo $fedit['zip']?>"> </td>
            </tr><tr>
                <td colspan="2">Country</td>
                <td><input type="text" name="country" value="<?php echo $fedit['country']?>"> </td>
            </tr><tr>
                <td colspan="2">Birthday</td>
                <td><input type="text" name="birthday" value="<?php echo $fedit['birthday']?>"> </td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" name="done" value="Done"></td>
            </tr>
        </table>
    </div>

</form>
</body>
</html>