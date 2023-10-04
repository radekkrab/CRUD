<?php
    require_once '../config/connect.php';
    $id = $_POST['id'];
    $comment = $_POST['comment'];
    $connect->query("INSERT INTO `comments` (`id`, `product_id`, `comment`) VALUES (NULL, '$id', '$comment')");
    header("Location: ../view.php?id=$id");