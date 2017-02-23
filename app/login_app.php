<?php

require_once("connect.php");



    if(isset($_POST['loginbutton'])) {

        if (!empty($_POST['login']) && !empty($_POST['password'])) {

            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $query = mysqli_query($con, "SELECT * FROM register_users WHERE login='" . $login . "' AND password= '" . $password . "' ");
            $numrows = mysqli_fetch_assoc($query);


            if (!empty($numrows)) {

                $_SESSION['user_id'] = $numrows['id'];
                $_SESSION['user_name'] = $numrows['login'];

                header("Location:../index.php");

            } else {
                echo "Login or Password is wrong";
            }
        } else {
            echo "Login or Password is empty, fill all fields";
        }
    }






