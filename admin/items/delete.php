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

unset($items[$itmId]);


$_SESSION['items']=$items;
header('Location: index.php');