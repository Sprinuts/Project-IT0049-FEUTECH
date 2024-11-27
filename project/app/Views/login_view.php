<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("public/style/loginview_cs.css")?>">

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<div class="container" id="container">
    <div class="form-container sign-up">
        <form action="<?= base_url('resetpassword'); ?>" class="sign-up-form" method="POST" id="sign-up-form">
            <h1>Reset Password</h1>
            <input type="text" name="username" id="username" placeholder="Username">
            <button type="submit" id="sign-up-btn">Reset Password</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="<?= base_url('login'); ?>" method="POST">
            <h1>Log In</h1>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" id="sign-in-btn">Log In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome!</h1>
                <p>Remember your password?</p>
                <button class="hidden" id="login">Log In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Forgot your password?</p>
                <button class="hidden" id="register">Reset Password</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url("public/javascript/login_js.js")?>"></script>