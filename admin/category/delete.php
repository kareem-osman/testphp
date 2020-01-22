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

$catId = $_REQUEST['id'];

unset($categories[$catId]);


$_SESSION['categ']=$categories;
header('Location: index.php');