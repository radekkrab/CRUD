<?php
    require_once 'config/connect.php';
    $goods = $connect->query("SELECT * FROM `goods`");
    $goods = $goods->fetch_all();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>&#10004;</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
            foreach($goods as $item) {
              ?>
              <tr>
              <td><?= $item[0] ?></td>
              <td><?= $item[1] ?></td>
              <td><?= $item[2] ?></td>
              <td><?= $item[3] ?></td>
              <td><a href="view.php?id=<?= $item[0] ?>">Просмотр</a></td>
              <td><a href="update.php?id=<?= $item[0] ?>">Обновить</a></td>
              <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Удалить</a></td>
              </tr>
              <?php      
            }
        ?>
    </table>
    <h2>Добавить новый товар</h2>
    <form action="vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea name="description"></textarea>
        <p>Цена</p>
        <input type="number" name="price">
        <button type="submit">Добавить</button>
    </form>
</body>
</html>