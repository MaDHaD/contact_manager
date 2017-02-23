<?php

require_once('../app/connect.php');
require_once('../app/event_app.php');

?>


<html>
<head>
</head>
<body>
<form method="post">

    <div align="center">
        <table>
            <tr>
                <td colspan="3" align="center"><h2>Make Event</h2></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="emails" size="52%" value="<?php if(!empty($emails)){echo $emails; } ?>"></td>
                <td align="left"><input type="submit" name="add_emails" value="Add email"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td colspan="2"><textarea name="message_area" cols="65" rows="5"></textarea></td>
            </tr>
            <tr>
                <td align="right" colspan="3"><input type="submit" name="send" value="Send"> <a href="../index.php">Back</a></td>

            </tr>
        </table>
    </div>

</form>
</body>

</html>