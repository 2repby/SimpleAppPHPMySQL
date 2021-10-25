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


    switch ($_GET["c"]) {
    case "1":
        {
            require("categories.php");
            if(isset($_SESSION['username'])) {
                switch ($_GET["a"]) {
                    case "1":
                        require("add_cat.php");break;
                    case "2":
                        require("del_cat.php");break;
                }
            };
            if ($err_msg) require 'message.php';
            require("categories.php");
            if(isset($_SESSION['username'])) require("cat_form.php");





        }break;
    case "2":
        {


    } break;
}



?>







