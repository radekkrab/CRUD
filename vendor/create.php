<?php
    require_once '../config/connect.php';
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $connect->query("INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')
    ");

    header('Location: /');

    ?>