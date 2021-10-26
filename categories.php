<div class="container">
    <table  border=1 class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Наименование</th>
            <?php if(isset($_SESSION['username'])) echo ('<th scope="col">Действие</th>') ?>
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
                <?php if(isset($_SESSION['username'])) echo ('<td><a href="?c=1&a=2&id='.$row['id'].'">Удалить</a></td>') ?>



            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>