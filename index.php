<?php include_once('template/header.php') ?>

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
    <input type="text" name="username" id="username">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" id="password" placeholder="Password">

    <button type="submit">Submit</button>
    <a href="register.php">Register</a>
</form>

</body>

<?php include('template/footer.php') ?>