<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 19.10.2021
 * Time: 13:35
 */
$host = '127.0.0.1';
$db   = '60571z';
$user = 'root';
$pass = 'keep';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
