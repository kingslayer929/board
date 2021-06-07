<?php
    if(!isset($_SESSION))
        session_start();

    if(isset($_POST['board_name'])){
        $board_name = $_POST['board_name'];

        include_once "../lib/basic.php";
        $function = new basic();
        $result = $function->create($board_name);
        $_SESSION['result'] = $result;
    }else{
        $_SESSION['result'] = "please check your insert, there miss something";
    }
    header("Location:../create.php");
?>