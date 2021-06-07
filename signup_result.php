<html>
    <?php
        if(!isset($_SESSION))
            session_start();
    ?>

    <head>
        <title>sign up</title>
        <link href="styles/board.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>

        <div class="background mid">
            <div class="func h1 mid">
                <?php
                    if(isset($_SESSION['result'])){
                        echo "$_SESSION[result]";
                        $_SESSION['result'] = NULL;
                    }
                ?>

                <button onclick="window.location.href='login.php'">login</button>

            </div>
        </div>
    </body>
    
</html>
