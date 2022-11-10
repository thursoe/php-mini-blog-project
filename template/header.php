<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog</title>
    <link rel="stylesheet" href="./template/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<?php if (isset($_SESSION['user'])) : ?>

    <header>
        <nav class="navbar fixed-top bg-white shadow-sm">
            <div class="container-fluid">
                <a href="blog.php" class="navbar-brand text-primary fw-bolder">My Blog</a>
                <div class="d-flex">
                    <a href="profile.php" class="btn btn-primary mx-3"><i class="bi bi-person-circle"></i></a>
                    <a href="_actions\logout.php" class="btn btn-outline-primary">Logout</a>
                </div>
            </div>
        </nav>
    </header>

<?php endif ?>