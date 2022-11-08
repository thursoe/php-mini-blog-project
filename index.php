<?php include_once('template/header.php') ?>

<body style="height: 100vh;">
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">     
        <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (isset($_GET['incorrect'])) : ?>
                            <h3>Incorrect Username or Password</h3>
                        <?php endif ?>

                        <?php
                        if (isset($_GET['registered'])) : ?>
                            <h3>Account created succesfully!</h3>
                        <?php endif ?>

                        <form action="_actions/login.php" method="post">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">

                            <div class="row my-3 px-3 justify-content-evenly">
                                <button type="submit" class="btn btn-primary col-5 ">Submit</button>
                                <a class="btn btn-secondary col-5 " href="register.php">Register</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('template/footer.php') ?>