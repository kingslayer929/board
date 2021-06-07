<?php
    if(!isset($_SESSION))
        session_start();

    $account = $_POST['account'];
    $password = $_POST['password'];

    if($_POST['account'] && $_POST['password']){
        include_once "../lib/login_system.php";
        $function = new login_system();
        $result = $function->login($account, $password);
        $_SESSION['result'] = $result;
    }else{
        $_SESSION['result'] = "Wrong account or password! Please insert again!";
    }
    if($_SESSION['result'] == "success"){
        header("Location:../board.php");
    }else{
        header("Location:../login.php");
    }
    
?>
