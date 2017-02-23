<?php

    require_once("../app/connect.php");
    require_once('../app/user_check.php');


    if(isset($_COOKIE['selected_emails'])){

        $array_mails = unserialize($_COOKIE['selected_emails']);
        $emails = implode(",", $array_mails );

    }

    if(isset($_POST['add_emails'])){

        header("Location:../view/select_con.php");
    
        }

            if(isset($_POST['send'])&& !empty($_POST['emails'])) {
                
                $new_email = htmlspecialchars($_POST['emails']);
                $query = mysqli_query($con, "SELECT * FROM contacts WHERE email='" . $new_email . "'");
                $numrows = mysqli_num_rows($query);
                $new_mails = explode(",",$_POST['emails']);
                
                if(!$numrows) {
                    setcookie('unknown_email', serialize($new_mails), 0, '/');
                    header("Location:../view/add_new.php");


                }

                $search_email = unserialize($_COOKIE['selected_emails']);
                $send_array = explode(",", $_POST['emails']);

                $diff = array_values(array_diff($send_array, $search_email));

                if (count($diff)  ) {
                    setcookie('unknown_email', serialize($diff), 0, '/');
                    setcookie('selected_emails', '', time()-3600);
                    header("Refresh:2");
                    header("Location:../view/add_new.php");

                } else {

                    $email = $_POST['emails'];
                    $message = $_POST['message_area'];
                    $headers="FROM: Test\r\n MIME-Version: 1.0\r\n Content-type: text/html; charset=windows-1251";
                    mail($email,'',$message,$headers);

                   header("Location:../view/send.php");

                }

            }



 
