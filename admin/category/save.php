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



if($_SERVER['REQUEST_METHOD']=="POST")
{
    $catName = $_REQUEST['cat_name'];
    $catdesc= $_REQUEST['cat_desc'];

    $categories[count($categories)+1] = ['name' => $catName,'desc' => $catdesc];
    
    // echo "<pre>";
    // print_r($categories);
    // echo "</pre>";
    $_SESSION['categ']=$categories;
    header('Location: index.php');

}


