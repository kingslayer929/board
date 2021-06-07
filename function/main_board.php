<?php
    include_once "/xampp/htdocs/board/lib/basic.php";
    $select = new basic();
    $result = $select->select_latest("board", 5);

    if($result){
        echo "<table border='1'>
        <tr>
        <th>board</th>
        <th>title</th>
        <th>user</th>
        <th>posttime</th>
        <th>last update</th>
        </tr>";

        foreach($result as $row)
        {
            echo "<tr>";
            echo "<td>" . $row['board_name'] . "</td>";
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
        echo "Something Wrong!";
    }
?>