<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 19.10.2021
 * Time: 13:48
 */

	if(isset($_SESSION['username']))
    {
        echo '<a class="nav-link disabled" href="#">Привет, '.$_SESSION['username'].'!</a>';
        echo '<form class="form-inline my-2 my-lg-0">';
        echo '  <a class="btn btn-outline-success my-2 my-sm-0" href="index.php?logout=1">Выйти</a>';
        echo '</form>';
    }
    else
    {
        echo '<form class="form-inline my-2 my-lg-0" method="post" action="index.php">';
        echo '  <input class="form-control mr-sm-2" type="text" placeholder="Логин" name="username">';
        echo '  <input class="form-control mr-sm-2" type="password" placeholder="Пароль" name="password">';
        echo '  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Войти</button>';
        echo '</form>';
    }

?>
<a href="categories.php?c=1">Категории</a>
