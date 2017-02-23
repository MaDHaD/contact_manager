<?php

require_once('connect.php');


    if(!isset($_SESSION['user_id'])){
        header("Location:../view/login.php");
    }      