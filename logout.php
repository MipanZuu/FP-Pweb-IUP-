<?php
    require_once('database/Database.php');
    $session = new Database();

    unset($_SESSION['user_logged']);

    header('location: index.php');
?>