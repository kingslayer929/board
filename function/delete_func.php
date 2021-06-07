<?php
    if(!isset($_SESSION))
        session_start();

    if($_POST['title'] || $_POST['title_']){
        $account = $_SESSION['account'];
        $title = $_POST['title'];

        include_once "../lib/basic.php";
        $function = new basic();
        $result = $function->delete($account, $title);
        $_SESSION['result'] = $result;
    }else{
        $_SESSION['result'] = "please check your insert, there miss something";
    }
    header("Location:../delete.php");
?>