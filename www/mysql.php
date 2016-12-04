<?php
$db = new PDO('mysql:host=mysql;dbname=test', 'root', 'mysql');
$db->query("INSERT INTO test VALUES('test')");
$st = $db->query("SELECT * FROM test");
var_dump($st->fetchAll());
