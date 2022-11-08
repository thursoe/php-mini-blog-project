<?php

session_start();

include('../_classes/Database/MySQL.php');
include('../_classes/Database/PostTable.php');

use \_classes\Database\MySQL;
use \_classes\Database\PostTable;

$user = $_SESSION['user'];

$title = $_POST['title'];
$text = $_POST['text'];

$table = new PostTable(new MySQL());
$table->insert($user->id, $title, $text);

header("Location: ../blog.php");
