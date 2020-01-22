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
?>

<html>
    <head>

    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <?php foreach($categories as $key => $category)
            {
                ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $category['name'] ?></td>
                <td><a href="read.php?id=<?=$key ?>">R</a>
                <a href="delete.php?id=<?=$key ?>">D</a>
                <a href="update.php?id=<?=$key ?>">U</a>
            </td>
            </tr>
            <?php } ?>
        </table>
        <hr>
        <hr>
        <button><a href="form.html">Add new Category</a></button>
    </body>
</html>




