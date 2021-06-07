<?php
    class basic{
        
        function insert($board_name, $title, $account, $content){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `board name`
                WHERE `name` = :board_name_"
            );
            $select->bindValue("board_name_", $board_name);
            $select->execute();
            $exist = $select->fetch(PDO::FETCH_ASSOC);
            if($exist){
                $insert = $con->prepare("INSERT INTO `board`
                    (`title`, `user`, `posttime`, `last_update`, `content`, `board_name`)
                    VALUES (:title_, :account_, current_time, current_time, :content_, :board_name_)"
                );
                $insert->bindValue("title_", $title);
                $insert->bindValue("account_", $account);
                $insert->bindValue("content_", $content);
                $insert->bindValue("board_name_", $board_name);
                $result = $insert->execute();
                $db = $con = NULL;
                if($result){
                    return "1 post added";
                }else{
                    return "post failed";
                }
            }
            else{
                $db = $con = NULL;
                return "the board hasn't exist";
            }
        }

        function delete($account, $title){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `board`
                WHERE `title` = :title_"
            );
            $select->bindValue("title_", $title);
            $select->execute();
            $row = $select->fetch(PDO::FETCH_ASSOC);
            if($row){
                if($account == $row['user']){
                    $delete = $con->prepare("DELETE FROM `board`
                        WHERE `title` = :title_"
                    );
                    $delete->bindValue("title_", $title);
                    $result = $delete->execute();
                    $db = $con = NULL;
                    if($result){
                        return "1 post deleted";
                    }
                    else{
                        return "delete failed";
                    }
                }else{
                    $db = $con = NULL;
                    return "Oops! delete failed! you cannot delete other people's posts!";
                }
            }else{
                $db = $con = NULL;
                return "Please check your insert! There's no that post!";
            }
        }

        function create($board_name){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();
            $board_name = $_POST['board_name'];
            $insert = $con->prepare("INSERT INTO `board name`
                (`id`, `name`)
                VALUES (NULL, :board_name_)"
            );
            $insert->bindValue("board_name_", $board_name);
            $result = $insert->execute();
            $db = $con = NULL;
            if($result){
                return "board created";
            }
            else{
                return "create failed";
            }
        }

        function update($account, $title, $content){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `board`
                WHERE `title` = :title_"
            );
            $select->bindValue("title_", $title);
            $select->execute();
            $row = $select->fetch(PDO::FETCH_ASSOC);
            if($account == $row['user']){
                $update = $con->prepare("UPDATE `board`
                    SET `content` = :content_,
                        `last_update` = current_time
                    WHERE `title` = :title_"
                );
                $update->bindValue("content_", $content);
                $update->bindValue("title_", $title);
                $result = $update->execute();
                $db = $con = NULL;
                if($result){
                    return "content updated!";
                }
                else{
                    return "update failed!";
                }
            }else{
                $db = $con = NULL;
                return "Oops! update failed! you are not the one who post this post!";
            }
        }

        function select($board_name){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `board`
                WHERE `board_name` = :board_name_
                ORDER BY `last_update` DESC
            ");
            $select->bindValue("board_name_", $board_name);
            $result = $select->execute();
            $db = $con = NULL;
            if($result){
                return $select->fetchAll();
            }else{
                return NULL;
            }
        }

        function select_latest($data, $count){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `board` 
                ORDER BY `last_update` DESC
                LIMIT $count
            ");
            $select->bindValue("data_", $data);
            $result = $select->execute();
            $db = $con = NULL;
            if($result){
                return $select->fetchAll();
            }else{
                return NULL;
            }
        }

        function select_boardName(){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $select = $con->prepare("SELECT * FROM `board name`");
            $result = $select->execute();
            $db = $con = NULL;
            if($result){
                return $select->fetchAll();
            }else{
                return NULL;
            }
        }

        function select_titleName(){
            include_once "dbconnect.php";
            $db = new dbconnect();
            $con = $db->connect();

            $account = $_SESSION['account'];

            $select = $con->prepare("SELECT * FROM `board`
                WHERE `user` = :account_"
            );
            $select->bindValue("account_", $account);
            $result = $select->execute();
            $db = $con = NULL;
            if($result){
                return $select->fetchAll();
            }else{
                return NULL;
            }
        }

    }

?>