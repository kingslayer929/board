<?php
    if(!isset($_SESSION))
        session_start();
    
    if($_POST['title'] && $_POST['content'] && ($_POST['board_name'] || $_POST['board_name_'])){
        $account = $_SESSION['account'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $board_name = $_POST['board_name'];

        include_once "../lib/basic.php";
        $function = new basic();
        $result = $function->insert($board_name, $title, $account, $content);
        $_SESSION['result'] = $result;
    }else{
        $_SESSION['result'] = "please check your insert, there miss something";
    }
    header("Location:../insert.php");
?>