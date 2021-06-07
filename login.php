<html>

    <?php
        if(!isset($_SESSION))
            session_start();
    ?>
    
    <head>
        <title>login</title>
        <link href="styles/login.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <div class="background container">
        <div class="h1 container">
            <div><strong>LOGIN</strong></div>
            
            <div class="wrong_insert">
                <?php
                    if(isset($_SESSION['result'])){
                        echo "$_SESSION[result]";
                        $_SESSION['result'] = NULL;
                    }
                ?>
            </div>
            
            <form action="function/login_func.php" method="post" class="container">
                <p>account:<input type="text" name="account" required></p>
                <p>password:<input type="password" name="password" required></p>
                <input type="submit" value="login">             
            </form>
            <form action="signup.php" class="container">
                <input type="submit" value="sign up">
            </form>
            <button onclick="window.location.href='board.php'">back to HomePage</button><br>
                       
        </div>
    </div> 
    
</html>
