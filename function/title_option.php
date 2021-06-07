<?php
    include_once "lib/basic.php";
    $function = new basic();
    $result = $function->select_titleName();
    
    foreach($result as $row){
        ?>
            <option value="<?php echo "$row[title]";?>">
                <?php
                    echo "$row[title]";
                ?>
            </option>
        <?php
    }
?>