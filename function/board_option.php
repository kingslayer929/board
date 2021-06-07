<?php
    include_once "lib/basic.php";
    $function = new basic();
    $result = $function->select_boardName();
    
    foreach($result as $row){
        ?>
            <option value="<?php echo "$row[name]";?>">
                <?php
                    echo "$row[name]";
                ?>
            </option>
        <?php
    }
?>