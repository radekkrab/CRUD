<?php
    $connect = new mysqli('localhost', 'root', '', 'crud');
    if($connect->connect_error) {
            die("Ошибка подключения к БД:".$connect->connect_error);
    }