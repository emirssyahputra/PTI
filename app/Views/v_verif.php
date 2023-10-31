<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">
    <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
    <title>Verifikasi</title>
</head>

<body>
    <div class='login-outer-container'>
        <div class='login-container'>
            <div class='login-area'>
            <img src="<?= base_url('images/logo.png'); ?>" alt="RedX Logo" class="centered-logo">
                <h3>Verifikasi Email</h3>
                <p>Silakan cek email Anda, kami telah mengirimkan kode OTP untuk mereset password Anda.</p>
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger text-center">
                        <?php foreach ($errors as $error): ?>
                            <?= esc($error) ?><br> <!-- Menggunakan esc() untuk mencegah XSS -->
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <form class='login-items' action="<?= site_url('verif/resetOtp') ?>" method="post">
                    <label htmlFor="otp">Kode OTP</label>
                    <input type="text" class='login' name="otp" placeholder='Masukkan kode OTP' required />
                    <input type="submit" class='login-btn' value="Submit" />
                </form>
                <p class='p'><a class='a' href="<?php echo site_url('Login'); ?>">Kembali ke Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>