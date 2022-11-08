<?php
session_start();

include('../_classes/Database/MySQL.php');
include('../_classes/Database/UserTable.php');

use \_classes\Database\MySQL;
use \_classes\Database\UserTable;

$username = $_POST['username'];
$password = $_POST['password'];

if ($username != '' || $password != '') {
    $table = new UserTable(new MySQL());
    $user = $table->findByNameAndPassword($username, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: ../blog.php");
    } else {
        header("Location: ../index.php?incorrect=true");
    }
}
