<?php


require_once("connect.php");



    if(isset($_POST["register"])) {

        if (!empty($_POST['login']) && !empty($_POST['password'])) {

            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $query = mysqli_query($con, "SELECT * FROM register_users WHERE login='" . $login . "'");
            $numrows = mysqli_num_rows($query);

            if (!$numrows) {

                mysqli_query($con, "INSERT INTO register_users(login,password) VALUES ('$login','$password')");

                header("Location:login.php");
            }
        } else {
         $message = "All fields are required!";

        }
    }
