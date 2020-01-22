<?php
// listing all categories
session_start();
if(!isset($_SESSION['categ']))
{
include '../../database/category.php';
}
else
{
    $categories = $_SESSION['categ'];
}


    $catId = $_REQUEST['id'];
    $catData = $categories[$catId];

    // $relatedItems = filterItems($catId, $items);
?>

<html>
    <head>

    </head>
    <body>
        cat name : <?= $catData['name'] ?> <br>
        cat description: <?= $catData['desc'] ?> <br>
        Related Items:
        
    </body>
</html>