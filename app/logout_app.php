<?php


require_once("connect.php");
require_once('user_check.php');


        if(!isset($_SESSION['user_id'])){
            header("Location:view/login.php");
        }

            if(isset($_SESSION['user_id'])){

                unset($_SESSION['user_id']);

                    session_destroy();

                        header("Location:../view/login.php");
            }