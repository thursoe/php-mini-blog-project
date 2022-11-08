<?php
include('../_classes/Database/MySQL.php');
include('../_classes/Database/UserTable.php');

use \_classes\Database\MySQL;
use \_classes\Database\UserTable;

$username = $_POST['username'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$password = $_POST['password'];

$image = $_FILES['image'];
$image_name = $image['name'];
$image_tmp = $image['tmp_name'];

if ($username != '' || $mail != '' || $password != '') {
    $table = new UserTable(new MySQL());

    if ($table) {

        if (!$image['error']) {
            move_uploaded_file($image_tmp, "../template/images/$image_name");
        }

        $table->insert($username, $mail, $address, $password, $image_name);

        header("Location: ../index.php?registered=true");
    }
} else {
    header("Location: ../register.php?error=true");
}
