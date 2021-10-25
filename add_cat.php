<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 25.10.2021
 * Time: 14:48
 */
try {
    $query = $pdo->query('INSERT INTO category (name) VALUES ("' . $_GET["catname"] . '")');
    //echo($query->queryString);
    $err_msg = "Категория успешно добавлена";
} catch (PDOException $exception) {
    $err_msg = "Ошибка добавления категории";
}