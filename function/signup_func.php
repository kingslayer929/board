<?php
    if(!isset($_SESSION))
        session_start();

    $account = $_POST['account'];
    $password = $_POST['password'];

    include_once "../lib/login_system.php";
    $function = new login_system();
    $result = $function->sign_up($account, $password);
    $_SESSION['result'] = $result;

    header("Location:../signup_result.php");
?>