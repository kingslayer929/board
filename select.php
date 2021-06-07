<html>
    <?php
        if(!isset($_SESSION))
            session_start();
    ?>
    <head>
        <title>Select</title>
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
            <div class="h1">
                <p>Select a board to see more info.</p>
            </div>

            <div class="board func mid">
                <?php
                    include_once "function/select_board.php";
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

            <button onclick="window.location.href='board.php'">back</button><br>

        </div>
        
    </body>
    
</html>