<?php
    if(!isset($_SESSION))
        session_start();
    if($_SESSION['account'] == NULL){
        ?>
        
        <div class="h1">login to edit the board!</div>  
        <form action="login.php" class="h1 mid top_button">
            <input type="submit" value="login">
        </form>
        
        <?php
    }else{
        ?>
        
        <div class="h1">
            <?php    
                echo "Welcome to board, $_SESSION[account]!";
            ?>
        </div>
        <form action="function/logout.php" class="h1 mid top_button">
            <input type="submit" value="logout">
        </form>

        <?php
    }
?>