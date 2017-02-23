<?php


require_once("connect.php");
require_once('user_check.php');

    $un_email= unserialize($_COOKIE['unknown_email']);




        if(isset($_POST['add'])){

            $email = $_POST['chek'];
            $in_email = array_values($email);
            var_dump($in_email);

                for($i=0; $i<count($in_email); $i++ ){

                    mysqli_query($con,"INSERT INTO contacts(user_id,email,selected_phone) VALUES('" . $_SESSION['user_id'] . "', '" . $in_email[$i] . "' , 'home_phone')");

                    header("Location:../index.php");
                }


        }
