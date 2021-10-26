<?php
    session_start();
    $err_msg = '';
    if (isset($_POST["username"]))
    {
        $query = $pdo->query('SELECT md5password FROM users WHERE name="' . $_POST["username"] . '"');
        $query->execute();

        if ($query->rowCount() == 0) $err_msg = "Неправильное имя пользователя!";
        else {
            $row=$query->fetch();
            if (MD5($_POST["password"])!= $row['md5password']) $err_msg = "Неправильный пароль!";
            else {
                $_SESSION['username'] = $_POST["username"];
                $err_msg = "Вы успешно вошли в систему";
            }
        }

    }

    if (isset($_GET["logout"]))
    {
        session_unset();
        $err_msg = "Вы успешно вышли из системы";
    }






/*
    if (!$lst)
    {
        echo 'Произошла неизвестная ошибка при подключении к БД...';
    }
    if (mysql_num_rows($lst) == 0) echo 'Вы ввели неправильное имя пользователя...';
    else
    {
        $pass =  @mysql_fetch_array($lst);
        if ($_POST["pass"]!= $pass['pass'])
        {
            echo 'Вы ввели неправильный пароль...';
        }
        else $_SESSION['username'] = $_POST["username"];
    }*/

/*
if (isset($_GET["logout"]))
{
    session_unset();
}
if(isset($_SESSION['username']))
{
    echo 'Привет, '.$_SESSION['username'].'!';
    echo ("<p><a href='index.php?logout=1'>Выйти из системы</a>");
}
else
{
    echo("<b>Вы не авторизованы!</b>
			<form method=post action='index.php'>
			Имя:<input type='text' name='username'>
			Пароль:<input type='password' name='pass'>
			<input type='submit' value='Войти'></form>");
}*/
?>

