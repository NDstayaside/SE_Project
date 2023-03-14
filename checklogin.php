<?php
	session_start();
    require_once 'connect.php';

        $username = $mysqli -> real_escape_string($_POST['username']);
        $password = $mysqli -> real_escape_string($_POST['password']);
        $strSQL = "SELECT * FROM username WHERE username = '". $username."'
                    and password = '".$password."'"; //หาuser&pass
        $objQuery = $mysqli -> query($strSQL); //
        $objResult = $objQuery -> fetch_array(MYSQLI_ASSOC);
        if(!$objResult)
            { echo "Username and Password Incorrect!";
            
            }
        else
        {
                $_SESSION["user_username"] = $objResult["username"];
                // $_SESSION["user_name"] = $objResult["user_name"];
                // $_SESSION["user_sername"] = $objResult["user_sername"];
                $_SESSION["user_type"] = $objResult["user_type"];
                // $_SESSION["user_id"] = $objResult["user_id"];
                if($objResult["user_type"]=="admin")
                {
                    header("location:http://localhost/SE_Project/");
                }
                else
                {
                    header("location:http://localhost/SE_Project/");
                }
            }

?>