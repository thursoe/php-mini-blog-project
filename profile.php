<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

$user = $_SESSION['user'];
?>

<?php include_once('template/header.php') ?>

<body>
    <div class="container mb-5 py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <img src="template/images/<?= $user->image ?>" alt="">
                        <h1><?= $user->name ?></h1>
                        <p><i class="bi bi-envelope-fill mx-3"></i><b><?= $user->mail ?></b></p>
                        <p><i class="bi bi-geo-alt-fill mx-3"></i>Lives in <b><?= $user->address ?></b></p>
                        <p><i class="bi bi-clock-fill mx-3"></i>Joined <b><?= $user->created_at ?></b></p>
                        <a href="blog.php" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once('template/footer.php'); ?>