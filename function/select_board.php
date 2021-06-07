<?php
    $board_name = $_POST['board_name'];
    

    include_once "/xampp/htdocs/board/lib/basic.php";
    $function = new basic();
    $result = $function->select($board_name);

    if($result){
        ?>
        
        <div class="h1">
            <?php
                echo "$board_name";
            ?>
        </div>
        
        <?php

        echo "<table border='1'>
        <tr>
        <th>title</th>
        <th>user</th>
        <th>posttime</th>
        <th>last update</th>
        </tr>";

        foreach($result as $row)
        {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['user'] . "</td>";
            echo "<td>" . $row['posttime'] . "</td>";
            echo "<td>" . $row['last_update'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan=5>" . $row['content'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        ?>

        <div class="h1 mid">the board doesn't exist</div>
        
        <?php
    }

    $db = $con = NULL;
?>