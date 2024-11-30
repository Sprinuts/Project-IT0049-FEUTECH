<head>
    <link rel="stylesheet" href="<?= base_url('public/style/reset_view.css'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<div class="container" id="container">
    <div class="form-container resetpass"></div>
    <?php if (validation_errors() != null): ?>
        <div class="alert alert-danger">
            <p><?= validation_list_errors(); ?></p>
        </div>
    <?php endif ?>
    <form action="<?= base_url('reset/'.esc($resetcode)); ?>" class="resetpass-form" method="POST" id="resetpass-form">
        <h1>Reset Password</h1>

        <div class="password-container">
            <input type="password" name="newpass" id="newpass" placeholder="New Password">
            <i id="eyeNew" class="fa-solid fa-eye-slash toggle-icon" onclick="togglePassword('newpass', 'eyeNew')"></i>
        </div>

        <div class="password-container">
            <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password">
            <i id="eyeConfirm" class="fa-solid fa-eye-slash toggle-icon" onclick="togglePassword('confirmpass', 'eyeConfirm')"></i>
        </div>

        <button type="submit" id="resetpass-btn">Reset Password</button>
    </form>
</div>

<script src="<?= base_url('public/javascript/login_js.js'); ?>"></script>
