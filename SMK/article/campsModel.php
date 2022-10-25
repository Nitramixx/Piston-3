<?php

require_once('../datas/mysql.php');

$mysqlQuery = 'SELECT * FROM camps ORDER BY id DESC';
$campsStatement = $mysqlClient -> prepare($mysqlQuery);
$campsStatement -> execute();
$camps = $campsStatement -> fetchAll();

