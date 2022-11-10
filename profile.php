<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

include('_classes/Database/MySQL.php');
include('_classes/Database/UserTable.php');

use _classes\Database\MySQL;
use _classes\Database\UserTable;

if (isset($_GET['id'])) {
    $usertable = new UserTable(new MySQL());
    $user = $usertable->findById($_GET['id']);
} else {
    header('Location: index.php');
}

?>

<?php include_once('template/header.php') ?>

<body>
    <div class="container mb-5 py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row px-3">
                            <h1 class="col-8 align-self-center"><?= $user->name ?></h1>
                            <?php if (!empty($user->image)) : ?>
                                <img src="template/images/<?= $user->image ?>" alt="profile" class="rounded-circle col-4">
                            <?php else : ?>
                                <img src="template/images/default_profile.png" alt="profile" class="rounded-circle col-4">
                            <?php endif ?>
                        </div>
                        <p><i class="bi bi-envelope-fill mx-3"></i><b><?= $user->mail ?></b></p>
                        <p><i class="bi bi-geo-alt-fill mx-3"></i>Lives in <b><?= $user->address ?></b></p>
                        <p><i class="bi bi-clock-fill mx-3"></i>Joined <b><?= $user->created_at ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once('template/footer.php'); ?>