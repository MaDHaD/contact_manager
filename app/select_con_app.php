<?php

require_once("connect.php");
require_once('user_check.php');


        $query = mysqli_query($con,"SELECT * FROM contacts WHERE user_id= '" . $_SESSION['user_id'] . "'" );
        $res = mysqli_fetch_all($query,MYSQLI_ASSOC);

if(isset($_POST['cancel'])) {
    header("Location:../view/event.php");

}
        if(isset($_POST['accept'])){

            setcookie('selected_emails', serialize($_POST['select']), 0, '/');

            header("Location:../view/event.php");
        }
