<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['items']))
{
include '../../database/items.php';
}
else
{
    $items = $_SESSION['items'];
}

$itmId = $_REQUEST['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item Details</title>
</head>
<body>
 <div class="hju" style="text-align: center;width: 200px">
 <h2>Item Details</h2>
    <hr>
    <span>Id</span>
    <h3><?= $itmId ?></h3>
    <hr>
    <span>Category Id</span>
    <h3><?= $items[$itmId]['catID'] ?></h3>
    <hr>
    <span>Item name</span>
    <h3><?= $items[$itmId]['name'] ?></h3>
    <hr>
    <span>Price</span>
    <h3>$<?= $items[$itmId]['price'] ?></h3>
    <hr>
    <span>Describtion</span>
    <h3><?= $items[$itmId]['desc'] ?></h3>
    <hr>
    <button><a href="index.php">Back To Item Index</a></button>
 </div>
    
</body>
</html>