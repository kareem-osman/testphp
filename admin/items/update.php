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
    <title>Add New Item</title>
</head>
<body>
    <h2>Update Item</h2>
<br>
<br>
<form action="saveupdate.php" method="post">
    <input type="hidden" name="id" value="<?= $itmId?>">
    <label for="">Item Name</label>
    <input type="text" name="name" value="<?= $items[$itmId]['name'] ?>">
    <br>
    <br>
    <label for="">Price</label>
    <input type="text" name="price" value="<?= $items[$itmId]['price'] ?>">
    <br>
    <br>
    <label for="">Category Id</label>
    <input type="text" name="catID" value="<?= $items[$itmId]['catID'] ?>">
    <br>
    <br>
    <label for="">Item Descrabtion</label>
    <input type="text" name="desc" value="<?= $items[$itmId]['desc'] ?>">
    <br>
    <br>
    <input type="submit" value="Update">
</form>
    
</body>
</html>