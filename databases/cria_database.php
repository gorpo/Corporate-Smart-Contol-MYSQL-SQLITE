
<!-- @Gorpo Orko - 2020 -->

<?php
$host = "localhost";
$root = "root";
$root_password = "";
$db = "site";

try {
    $dbh = new PDO("mysql:host=$host", $root, $root_password);
    $dbh->exec("CREATE DATABASE IF NOT EXISTS `$db`;");
}
catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}

?>