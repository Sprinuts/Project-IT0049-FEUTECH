<div class="container" id="container">
    <div class="form-container sign-up"></div>
            <form action="<?= base_url('reset');  ?>" class="sign-up-form" method="POST" id="sign-up-form">
                <h1>Reset Password</h1>
                <input type="password" name="newpass" id="newpass" placeholder="New Password">
                <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password">
                <button type="submit" id="sign-up-btn">Reset Password</button>
            </form>
        </div>

<script src="<?= base_url("public/javascript/login_js.js")?>"></script>