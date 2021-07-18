<?php

        require_once 'models/db_config.php';

        $name="";
        $err_name="";
        $username="";
        $err_username="";
        $email="";
        $err_email="";
        $password="";
        $err_password="";
        $err_db="";

        $hasError = false;


 if (isset($_POST["btn_login"])){




            if(empty($_POST["username"])){
                $hasError = true;
                $err_username ="Username  Required";
            }
            else{
                $username = htmlspecialchars($_POST["username"]);
            }
            if(empty($_POST["password"])){
                $hasError = true;
                $err_password ="Password  Required";
            }
            else{

                $password = htmlspecialchars($_POST["password"]);
            
            }




            if(!$hasError){

                if(authenticateUser($username,$password)){

                    header("Location: Dashboard.php");
                }
                $err_db = "Username password invalid";



                }


        }











        function authenticateUser($username,$password){
            $query = "select * from admin where username='$username' and password = '$password'";
            $rs = get($query);
            if(count($rs) > 0){
                return true;
            }
            return false;



        }


?>