<?php
include '../../database/category.php';

$catId = $_REQUEST['id'];
$catData = $categories[$catId];
?>

<html>
    <head></head>
    <body>
        Update Category
        <form method='POST' action="saveUpdate.php">
            <input type="hidden" name='cat_id' value='<?=$catId ?>'>
            category name: <input type="text" name='cat_name' value='<?=$catData['name']?>'><br>
            category desc: <input type="text" name='cat_desc' value='<?=$catData['desc']?>'><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>

