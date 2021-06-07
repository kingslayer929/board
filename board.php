<html>
    
    <?php
        if(!isset($_SESSION))
            session_start();
        if(!isset($_SESSION['account'])){
            $_SESSION['account'] = NULL;
        }
        $_SESSION['wrong'] = 0;
        $_SESSION['result'] = NULL;
    ?>
    
    <head>
        <title>board</title>
        <link href="styles/board.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    
    <body>
        
        <div class="top mid">  
            <?php
                include_once "top.php";
            ?>
        </div>
    
        <div class="background mid">
            <div class="func mid">
                <div class="h1">Latest post</div>
                <?php
                    include_once "function/main_board.php";
                ?>
                <br>
            </div>    
            
            <div class="func mid">
                <div class="h1">Select</div>
                <form action="select.php" method="POST" class="mid">
                    choose a board:
                    <select name="board_name" required>
                        <option selected></option>
                        <?php
                            include_once "function/board_option.php";
                        ?>
                    </select><br>
                    <input type="submit" value="select">
                </form>
            </div>


            <?php
                if($_SESSION['account'] != NULL){
                    ?>
                    
                    <div class="func mid">
                        <div class="h1">Basic Functions</div><br>
                        <div id="CIUD">
                            <button onclick="window.location.href='create.php'">create a board</button><br>
                            <button onclick="window.location.href='insert.php'">insert a post</button><br>
                            <button onclick="window.location.href='update.php'">update a post</button><br>
                            <button onclick="window.location.href='delete.php'">delete a post</button><br>
                        </div>
                        <br>
                    </div>

                    <?php
                }
            ?>

        </div>
        
    </body>

</html>