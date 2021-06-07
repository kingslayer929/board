<?php
    if(!isset($_SESSION))
        session_start();

    if(($_POST['title'] || $_POST['title_']) && $_POST['content']){
        $account = $_SESSION['account'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        include_once "../lib/basic.php";
        $function = new basic();
        $result = $function->update($account, $title, $content);
        $_SESSION['result'] = $result;
    } else{
        $_SESSION['result'] = "please check your insert, there miss something";
    }
    header("Location:../update.php");
?>