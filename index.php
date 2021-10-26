<?php
    require("dbconnect.php");
    require("auth.php");
    require 'header.php';
    require("menu.php");
echo '<main role="main" class="container">';
    switch ($_GET["c"]) {
    case "1":
        {

            if(isset($_SESSION['username'])) {
                switch ($_GET["a"]) {
                    case "1":
                        require("add_cat.php");break;
                    case "2":
                        require("del_cat.php");break;
                }
            };
            require("categories.php");

            if(isset($_SESSION['username'])) require("cat_form.php");





        }break;
    case "2":
        {


        } break;


}
if ($err_msg) require 'message.php';

echo '</main>';
require 'footer.php';
?>







