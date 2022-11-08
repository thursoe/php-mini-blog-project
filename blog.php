<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

include('_classes/Database/MySQL.php');
include('_classes/Database/PostTable.php');

use _classes\Database\MySQL;
use _classes\Database\PostTable;

$user = $_SESSION['user'];
$table = new PostTable(new MySQL());
$posts = $table->getAll();

?>

<?php include_once('template/header.php') ?>

<body>
    <h1>Welcome <span><?= $user->name ?></span></h1>
    <a href="profile.php">View Profile</a> | <a href="_actions\logout.php">Logout</a>
    <br />

    <p>Create post</p>
    <form action="_actions/create_post.php" method="post">
        Title: <input type="text" name="title" id="">
        Text: <input type="text" name="text" id="">
        <button type="submit">Post</button>
    </form>

    <br />

    <?php foreach ($posts as $post) : ?>
        <h2> <?= $post->title ?> </h2>
        <h5> by - <?= $post->name ?> </h5>
        <p> updated at - <?= $post->created_at ?> </p>
        <p> <?= $post->text ?> </p>
        <hr />
    <?php endforeach ?>
</body>

<?php include_once('template/footer.php'); ?>