<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

$user = $_SESSION['user'];
?>

<?php include_once('template/header.php') ?>

<body>
    <img src="template/images/<?= $user->image ?>" alt="">
    <h1><?= $user->name ?></h1>
    <p>Email: <?= $user->mail ?></p>
    <p>Address: <?= $user->address ?></p>
    <p>Joined <?= $user->created_at ?></p>
    <a href="blog.php">Back</a>
</body>

<?php include_once('template/footer.php'); ?>