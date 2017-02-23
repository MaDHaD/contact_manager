<?php

require_once("connect.php");
require_once('user_check.php');


$id= $_GET['id'];


        if($id){
            $edit= mysqli_query($con,"SELECT * FROM contacts WHERE id=".$id);
            $fedit= mysqli_fetch_assoc($edit);

        }


            if(isset($_POST['done'])){


                $first_name = htmlspecialchars($_POST['first_name']);
                $last_name = htmlspecialchars($_POST['last_name']);
                $email = htmlspecialchars($_POST['email']);
                $selected_phone = htmlspecialchars($_POST['select']);
                $home_phone = htmlspecialchars($_POST['home_phone']);
                $work_phone = htmlspecialchars($_POST['work_phone']);
                $cell_phone = htmlspecialchars($_POST['cell_phone']);
                $address1 = htmlspecialchars($_POST['address1']);
                $address2 = htmlspecialchars($_POST['address2']);
                $city = htmlspecialchars($_POST['city']);
                $state = htmlspecialchars($_POST['state']);
                $zip = htmlspecialchars($_POST['zip']);
                $country = htmlspecialchars($_POST['country']);
                $birthday = htmlspecialchars($_POST['birthday']);

                $endedit= mysqli_query($con,"UPDATE contacts SET
                                                                 first_name='$first_name', 
                                                                 last_name='$last_name', 
                                                                 email='$email', 
                                                                 selected_phone='$selected_phone', 
                                                                 home_phone='$home_phone', 
                                                                 work_phone='$work_phone', 
                                                                 cell_phone='$cell_phone', 
                                                                 address1='$address1', 
                                                                 address2='$address2', 
                                                                 city='$city', 
                                                                 state='$state', 
                                                                 zip='$zip', 
                                                                 country='$country', 
                                                                 birthday='$birthday' WHERE id=" . $id);

                header("Location:../index.php");
            }

