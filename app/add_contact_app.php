<?php

require_once("connect.php");
require_once('user_check.php');


if (isset($_POST['done'])) {

        $keys= array();
        $contacts= array();

            foreach ($_POST as $key => $value ){

                $keys[$key]= $key;
                $contacts[$key]= mysqli_real_escape_string($con,$value);
            }


                    $user_id = $_SESSION['user_id'];
                    unset($keys['done'], $contacts['done']);
                    $values = implode("','",$contacts);
                    $keys = implode(",",$keys);


                if (empty($contacts['first_name'])) {
                    $enter_first = "Please first name";
                }
                    elseif(empty($contacts['last_name'])){
                        $enter_last = "Please enter last name";
                    }
                        elseif(empty($contacts['email'])){
                            $enter_email = "Please enter email";
                        }
                            elseif(empty($contacts['home_phone'])){
                                $enter_phone = "Please enter phone";
                            }
                                elseif (mysqli_query($con, "INSERT INTO contacts (user_id, " . $keys . ") VALUES('" . $user_id . "','$values')")){
                                    header("Location: ../index.php");
                                }
}









