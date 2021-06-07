<?php
    class login_system{

        function login($account, $password){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `user`
                WHERE `username` = :account_"
            );
            $select->bindValue("account_", $account);
            $select->execute();
            $row = $select->fetch(PDO::FETCH_ASSOC);
            $db = $con = NULL;
            if(hash("sha512", $password) == $row['password']){
                $_SESSION['account'] = $account;
                return "success";
            }else{
                return "Wrong account or password! Please insert again!";
            }
        }

        function sign_up($account, $password){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $insert = $con->prepare("INSERT INTO `user`
                (`username`, `password`)
                VALUES (:id_, :password_)"
            );
            $insert->bindValue("id_", $account);
            $insert->bindValue("password_", hash('sha512', $password));
            $result = $insert->execute();
            $db = $con = NULL;
            if($result){
                return "You can login now!";
            }else{
                return "Please try again! the account has been used!";
            }
        }

    }



?>