<?php
session_start();
$catid=$_REQUEST['catID'];
$it_name=$_REQUEST['name'];
$it_price=$_REQUEST['price'];
$it_desc=$_REQUEST['desc'];
$it_id=$_REQUEST['id'];




if(!isset($_SESSION['items']))
{
    include "../../database/items.php";
}
else
{
    $items=$_SESSION['items'];
}

$items[$it_id]=['catID'=> $catid,'name'=>$it_name, 'price' => $it_price, 'desc'=>$it_desc];

$_SESSION['items']=$items;
header("location:index.php");
?>