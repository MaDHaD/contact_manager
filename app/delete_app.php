<?php

require_once("connect.php");
require_once('user_check.php');




$id = $_GET['id'];

if(isset($_POST['ok'])){
    mysqli_query($con,"DELETE FROM contacts WHERE id=" . $id);
    header("Location:../index.php");
}


?>
