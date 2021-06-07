<html>
    <?php
        if(!isset($_SESSION))
            session_start();
        $_SESSION['wrong'] = 0;
    ?>

    <head>
        <title>sign up</title>
        <link href="styles/login.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <div class="background container">
        <div class="h1 container">
            <strong>Sign Up!</strong>
            <form action="function/signup_func.php" method="post" class="container">
                <p>account:<input type="text" name="account" required></p>
                <p>password:<input type="password" name="password" required></p>
                <input type="submit" value="sign up">
            </form>
            <button onclick="window.location.href='login.php'">back</button><br>
                       
        </div>
    </div>  

</html>