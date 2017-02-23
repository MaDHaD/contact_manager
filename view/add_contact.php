<?php

require_once('../app/connect.php');
require_once('../app/add_contact_app.php');

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
            <td><input type="text" name="first_name"> </td>
            <td><?php if(isset($enter_first)) {echo "Enter first name";}?></td>
        </tr>

        <tr>
            <td colspan="2">Last</td>
            <td><input type="text" name="last_name" placeholder="<?php if(isset($enter_last)) {echo "Enter last name";}?>"> </td>

        </tr>

        <tr>
            <td colspan="2">Email</td>
            <td><input type="email" name="email"> </td>
            <td><?php if(isset($enter_email)) {echo "Enter email";}?></td>
        </tr>
        <tr>
            <td>Home</td>
            <td><input type="radio" name="selected_phone" value="home_phone" checked></td>
            <td><input  type="text" name="home_phone" > </td>
            <td><?php if(isset($enter_phone)) {echo "Enter phone";}?></td>
        </tr>
        <tr>
            <td>Work</td>
            <td><input type="radio" name="selected_phone" value="work_phone"></td>
            <td><input type="text" name="work_phone"> </td>
        </tr>
        <tr>
            <td>Cell</td>
            <td><input type="radio" name="selected_phone" value="cell_phone"></td>
            <td><input type="text" name="cell_phone" > </td>
        </tr>
        <tr>
            <td colspan="2">Address 1</td>
            <td><input type="text" name="address1"> </td>
        </tr>
        <tr>
            <td colspan="2">Address 2</td>
            <td><input type="text" name="address2"> </td>
        </tr>
        <tr>
            <td colspan="2">City</td>
            <td><input type="text" name="city"> </td>
        </tr><tr>
            <td colspan="2">State</td>
            <td><input type="text" name="state"> </td>
        </tr><tr>
            <td colspan="2">Zip</td>
            <td><input type="text" name="zip"> </td>
        </tr><tr>
            <td colspan="2">Country</td>
            <td><input type="text" name="country"> </td>
        </tr><tr>
            <td colspan="2">Birthday</td>
            <td><input type="text" name="birthday"> </td>
        </tr>
        <tr>
            <td colspan="3" align="right"><input type="submit" name="done" value="Done"></td>
        </tr>
    </table>
    </div>
</form>


</body>
</html>
