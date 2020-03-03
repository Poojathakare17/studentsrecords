<?php
require "controllers/Maincontroller.php";
require "models/database.php";
require "models/model.php";
require "models/students.php";

$config = require "resources/config/config.php";

$dsn = "mysql:host=".$config['db_host'].";dbname=".$config['db_name'].";charset=".$config['db_charset'];
$pdo = new PDO($dsn, $config['db_user'], $config['db_password'], $config['db_options']);
$db = new Database($pdo);

$maincontroller = new Maincontroller($db);
$maincontroller->index();