<?php
session_start();
if(!isset($_SESSION['categ']))
{
include '../../database/category.php';
}
else
{
    $categories = $_SESSION['categ'];
}


echo '<pre>';
print_r($categories);
echo '</pre>';


$categories[$_REQUEST['cat_id']] = ['name'=> $_REQUEST['cat_name'], 'desc'=> $_REQUEST['cat_desc']];
$_SESSION['categ']=$categories;
header('Location: index.php');
// echo '<pre>';
// print_r($categories);
// echo '</pre>';