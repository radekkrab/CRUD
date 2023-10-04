<?php
    require_once 'config/connect.php';
    $goods_id = $_GET['id'];
    $good = $connect->query("SELECT * FROM `goods` WHERE `id`='$goods_id'");
    $good = $good->fetch_assoc();
    $comments = $connect->query("SELECT * FROM `comments` WHERE `product_id`='$goods_id'");
    $comments = $comments->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Посмотреть товар</title>
</head>
<body>
<p><a href="index.php">Главная</a></p>
<h2><?= $good['title'] ?></h2>
<p><?= $good['description'] ?></p>
<p><b>Цена: </b><?= $good['price'] ?></p>
    <form action="vendor/createcomment.php" method="post">
        <input type="hidden" name="id" value="<?= $good['id'] ?>">
        <h2>Добавить комментарий</h2>
        <textarea name="comment"></textarea>
        <button type="submit">Отправить</button>
    </form>
<p><b>Комментарии</b></p>
<ul>
    <?php
        foreach($comments as $comment) {
        ?>
        <li><?= $comment[2] ?></li>
        <?php
        }
    ?>
</ul>
</body>
</html>