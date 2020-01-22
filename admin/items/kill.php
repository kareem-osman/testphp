<?php
session_start();
unset($_SESSION["items"]);
header('Location: index.php');