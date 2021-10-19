<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 19.10.2021
 * Time: 11:58
 */
    require("dbconnect.php");
    require("auth.php");
    require ("menu.php");

    echo ($err_msg);
switch ($_GET["c"]) {
    case "1":
        {
            try {
                $query = $pdo->query('INSERT INTO category (name) VALUES ("' . $_GET["catname"] . '")');
                echo($query->queryString);
                $err_msg = "Категория успешно добавлена";
            } catch (PDOException $exception) {
                $err_msg = "Ошибка добавления категории";
            }

        }break;
    case "2":
        {
            try {
                $query = $pdo->query('DELETE FROM category WHERE id="' . $_GET["id"] . '"');
                echo($query->queryString);
                $err_msg = "Категория успешно удалена";
            } catch (PDOException $exception) {
                $err_msg = "Ошибка удаления категории";
            }

    } break;
}



?>
<div class="container">
    <table  border=1 class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Наименование</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
<?php
$query = $pdo->query('SELECT * FROM category');
while ($row = $query->fetch())
{
?>

    <tr>

        <td><?php echo $row['id'] ?></th>
        <td><?php echo $row['name'] ?></td>
        <td><a href="?c=2&id=<?php echo $row['id'] ?>">Удалить</a></td>


        </tr>

<?php } ?>
        </tbody>
    </table>
</div>
<p>
<form method="get" action="/">
    <input type="hidden" name="c" value="1">
    <input type="text" name="catname">
    <input type="submit">
</form>





