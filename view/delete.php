<?php

require_once("../app/connect.php");
require_once('../app/delete_app.php');

?>

<html>
<head>

</head>
<body>
<form action="delete.php?id=<?php echo $_GET['id']?>" method="post">
    <div align="center">Are you sure<br/>
        <input type="submit" name="ok" value="YES">
        <a href="../index.php">NO</a>
    </div>

</form>
</body>
</html>
