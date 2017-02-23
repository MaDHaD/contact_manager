<?php

require_once('user_check.php');

    $sort_ln= 'a';
    $sort_fn= 'a';


    if(!empty($_COOKIE['selected_emails'])){
        setcookie('selected_emails', '', time()-3600);
        header("Refresh:2");
    }

    if(isset($_POST['event'])){
        header("Location:view/event.php");
    }

    if(isset($_POST['add'])){
        header("Location:view/add_contact.php");
    }


    $query = mysqli_query($con,"SELECT * FROM contacts WHERE user_id= '" . $_SESSION['user_id'] . "'" );

    $res = mysqli_fetch_all($query,MYSQLI_ASSOC);


    if(isset($_GET['ln'])) {

        if ($_GET['ln'] == 'a') {
            $sort_ln= 'z';
            $sort = mysqli_query($con, " SELECT * FROM contacts WHERE user_id='" . $_SESSION['user_id'] . "' ORDER BY last_name ASC");
            $res = mysqli_fetch_all($sort, MYSQLI_ASSOC);

        }

            if ($_GET['ln'] == 'z') {
                $sort_ln= 'a';
                $sort = mysqli_query($con, " SELECT * FROM contacts WHERE user_id='" . $_SESSION['user_id'] . "' ORDER BY last_name DESC");
                $res = mysqli_fetch_all($sort, MYSQLI_ASSOC);
            }
    }

    if(isset($_GET['fn'])) {
        if ($_GET['fn'] == 'a') {
                $sort_fn = 'z';
                $sort = mysqli_query($con, " SELECT * FROM contacts WHERE user_id='" . $_SESSION['user_id'] . "' ORDER BY first_name ASC");
                $res = mysqli_fetch_all($sort, MYSQLI_ASSOC);

        }

        if ($_GET['fn'] == 'z') {
            $sort_fn = 'a';
            $sort = mysqli_query($con, " SELECT * FROM contacts WHERE user_id='" . $_SESSION['user_id'] . "' ORDER BY first_name DESC");
            $res = mysqli_fetch_all($sort, MYSQLI_ASSOC);
        }
    }




