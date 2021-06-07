<html>
    
    <?php
        if(!isset($_SESSION))
            session_start();
        if($_SESSION['account'] == NULL){
            header("Location:board.php");
        }
    ?>
    
    <head>
        <title>Create a board</title>
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
                
                <div class="h1">Create a board</div>
                <form action="function/create_func.php" method="POST" class="mid">
                    board name:<input type="text" name="board_name"><br>
                    <input type="submit" value="create">
                </form>
                
            </div>

            <button onclick="window.location.href='board.php'">back</button><br>
             
        </div>
        
    </body>
    
</html>