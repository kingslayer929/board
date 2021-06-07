<html>

    <?php
        if(!isset($_SESSION))
            session_start();
        if($_SESSION['account'] == NULL){
            header("Location:board.php");
        }
    ?>

    <head>
        <title>Insert a post</title>
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
                <font color="red">
                    <?php
                        if(isset($_SESSION['result'])){
                            echo "$_SESSION[result]";
                            $_SESSION['result'] = NULL;
                        }
                    ?>
                </font>

                <div class="h1">Insert a data</div>
                <form action="function/insert_func.php" method="POST" class="mid">
                    choose a board:
                    <select name="board_name" required>
                        <option selected></option>
                        <?php
                            include_once "function/board_option.php";
                        ?>
                    </select><br>
                    title:<input type="text" name="title" maxlength="30"><br>
                    content:<input type="text" name="content" size="100" maxlength="100"><br>
                    <input type="submit" value="insert">
                </form>

            </div>

            <button onclick="window.location.href='board.php'">back</button><br>
        
        </div>
    
    </body>
    
</html>