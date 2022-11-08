<?php include_once('template/header.php') ?>

<body>
    <?php if (isset($_GET['error'])) : ?>
        <p>Can't register. Please try again!</p>
    <?php endif ?>

    <form action="_actions/create.php" method="post" enctype="multipart/form-data">
        <label for="username">Username</label>
        <input type="text" name="username" id=""><br />
        <label for="mail">Email</label>
        <input type="text" name="mail" id=""><br />
        <label for="address">Address</label>
        <input type="text" name="address" id=""><br />
        <label for="password">Password</label>
        <input type="password" name="password" id=""><br />
        <label for="image">Profile Image</label>
        <input type="file" name="image" id=""><br />
        <button type="submit">Submit</button>
    </form>
</body>

<?php include_once('template/footer.php'); ?>