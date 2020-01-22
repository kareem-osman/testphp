<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["items"]))
{
    include "../../database/items.php";
}
else
{
    $items=$_SESSION["items"];
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>items control</title>
</head>
<body>
    <h2 style="text-align: center">Item Control</h2>
    <table border="1"  style="text-align: center">
        <tr>
            <th>id</th>
            <th  style="width: 120px">Item Name</th>
            <th>Category Id</th>
            <th>Price</th>
            <th>Describation</th>
            <th  style="width: 120px">Actions</th>
        </tr>
        <?php
        foreach($items as $key => $val_it)
        {?>
        <tr >
            <td><?=$key?></td>
            <td><?=$val_it['name']?></td>
            <td><?=$val_it['catID']?></td>
            <td>$<?=$val_it['price']?></td>
            <td><?=$val_it['desc']?></td>
            <td>
                <a href="read.php?id=<?=$key?>">R</a>
                <a href='delete.php?id=<?=$key?>'>D</a>
                <a href="update.php?id=<?=$key?>">U</a>
            </td>
            
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <hr>
    <button><a href="form.html">Add New Item</a></button>
    <button><a href="kill.php">Back To defult Item</a></button>
</body>
</html>