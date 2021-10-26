<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Простой магазин</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="?c=1" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Категории</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="index.php?&c=1">Категории</a>
                </div>
            </li>
            <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="?c=1" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Товары</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="index.php?&c=1">Товары</a>
                </div>

            </li>
            <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="?c=1" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Заказы</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="index.php?&c=1">Заказы</a>
                </div>

            </li>


        </ul>
        <?php
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


    </div>
</nav>




