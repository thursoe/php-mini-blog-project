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
    <div class="container mb-5 py-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-lg-5 my-4">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-light w-100 text-muted" data-bs-toggle="modal" data-bs-target="#creatpostModal">
                            <i class="bi bi-plus-circle text-primary mx-1"></i> What's on your mind?
                        </button>
                    </div>
                </div>
                <?php foreach ($posts as $post) : ?>
                    <div class="card shadow-sm my-3">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $post->title ?> </h5>
                            <small> by - <?= $post->name ?></small> <br />
                            <small> updated at - <?= $post->created_at ?> </small>
                            <p class="card-text mt-3"> <?= $post->text ?> </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="creatpostModal" tabindex="-1" aria-labelledby="createpostModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createpostModalLabel">Create Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="_actions/create_post.php" method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Title Here" id="title" name="title"></textarea>
                            <label for="title">Title Here</label>
                        </div>
                        <textarea class="form-control" placeholder="What's on your mind?" name="text" style="height: 10rem;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

<?php include_once('template/footer.php'); ?>