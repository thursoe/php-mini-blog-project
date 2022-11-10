<?php include_once('template/header.php') ?>

<body style="height: 100vh;">
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                Can't register. Please try again!
                            </div>
                        <?php endif ?>
                        <form action="_actions/create.php" method="post" enctype="multipart/form-data">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control mb-3">
                            <label for="mail">Email</label>
                            <input type="text" name="mail" id="mail" class="form-control mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control mb-3">
                            <label for="image">Profile Image</label>
                            <input type="file" name="image" id="image" class="form-control mb-4">

                            <div class="row justify-content-evenly">
                                <button type="submit" class="btn btn-primary col-5 ">Register</button>
                                <a href="index.php" class="btn btn-primary col-5 ">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once('template/footer.php'); ?>