<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<div class="login-box">
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username">

        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>

    <div class="message">
        <?php echo $message; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>