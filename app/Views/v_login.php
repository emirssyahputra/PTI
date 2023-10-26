<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">
    <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class='login-outer-container'>
        <div class='login-container'>
            <div class='login-area'>
                <img src="<?= base_url('images/logo.png'); ?>" alt="RedX Logo" class="centered-logo">
                <h3>Login</h3>
                <?php
                    if (session()->has('error')) {
                        echo '<div class="alert alert-danger" role="alert" style="color: red;">' . session('error') . '</div>';
                    }
                ?>
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <form class='login-items' method="post" action="<?php echo site_url().'login/auth'?>">
                    <label for="email">Email</label>
                    <input type="email" class='login' name="email" placeholder='email@gmail.com' required />
                    <label for="password">Password</label>
                    <input type="password" class='login' name="password" placeholder="Password" required />
                    <input type="submit" class='login-btn' value="Login" />
                </form>
                <p class='p'>Belum punya akun? <a class='a' href="<?php echo site_url('Register');?>">Register</a></p>
                <p class='p'>Lupa password? <a class='a' href="<?php echo site_url('Lupa');?>">Reset Password</a></p>
                <p class='p'><a class='a' href="<?php echo site_url('/');?>">Kembali ke Home</a></p>
            </div>
        </div>
    </div>
</body>

</html>