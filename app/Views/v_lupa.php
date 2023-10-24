<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">
    <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
    <title>Lupa Password</title>
</head>

<body>
    <div class='login-outer-container'>
        <div class='login-container'>
            <div class='login-area'>
                <img src="<?= base_url('images/logo.png'); ?>" alt="RedX Logo" class="centered-logo">
                <h3>Lupa Password</h3>
                <form class='login-items'>
                    <label htmlFor="email">Email</label>
                    <input type="email" class='login' name="email" placeholder='email@gmail.com' required />
                    <input type="submit" class='login-btn' value="Reset Password" />
                </form>
                <p class='p'><a class='a' href="<?php echo site_url('Login');?>">Kembali ke Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>
