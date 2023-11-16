<!DOCTYPE html>
<html lang="en">
<?php 
$email = session()->getFlashdata('email');
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">
    <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
    <title>Reset Password</title>
</head>

<body>
    <div class='login-outer-container'>
        <div class='login-container'>
            <div class='login-area'>
            <img src="<?= base_url('images/logo.png'); ?>" alt="RedX Logo" class="centered-logo">
                <h3>Reset Password</h3>
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger text-center">
                        <?php foreach ($errors as $error): ?>
                            <?= esc($error) ?><br> <!-- Menggunakan esc() untuk mencegah XSS -->
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <form class='login-items'action="<?= site_url('passwordbaru/changePassword') ?>" method="post">
                    <label htmlFor="username">Email</label>
                    <input type="email" class='login' name="email" placeholder='email@gmail.com' value="<?= isset($email) ? $email : ''; ?>" readonly required />
                    <div class="form-group">
                        <label for="password">Password Baru</label>
                        <div class="password-container">
                            <input type="password" class="login" name="password" id="password" placeholder="Password" required />
                            <i class="fas fa-eye-slash toggle-password" onclick="togglePassword('password')"></i>
                        </div>
                    </div>
                    <input type="submit" class='login-btn' value="Reset Password" />
                </form>
                <p class='p'><a class='a' href="<?php echo site_url('/'); ?>">Kembali ke Home</a></p>
            </div>
        </div>
    </div>
    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var icon = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye', 'show-password');
            } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye', 'show-password');
            icon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>