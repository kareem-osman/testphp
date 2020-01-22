<?php
session_start();
$users = ['hossam', 'Kareem','Aya'];

$user = $_POST['user_name'];

if(in_array($user, $users))
{
    $_SESSION['user'] = $user;
    header('Location: index.php');
}
else
{
    $_SESSION['error'] = 1;
    header('Location: login.php');
}