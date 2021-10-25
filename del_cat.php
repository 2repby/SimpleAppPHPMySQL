<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 25.10.2021
 * Time: 14:48
 */
if(isset($_SESSION['username'])) {
    try {
        $query = $pdo->query('DELETE FROM category WHERE id="' . $_GET["id"] . '"');
        echo($query->queryString);
        $err_msg = "Категория успешно удалена";
    } catch (PDOException $exception) {
        $err_msg = "Ошибка удаления категории";
    }
}
else $err_msg = "У вас нет полномочий для выполнения данного действия";