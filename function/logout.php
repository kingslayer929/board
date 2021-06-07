<?php
    if(!isset($_SESSION))
        session_start();
    $_SESSION['account'] = NULL;
    $_SESSION['result'] = NULL;
    header("Location:../board.php");
?>