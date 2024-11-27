<div class="container" id="container">
    <div class="form-container resetpass"></div>
            <form action="<?= base_url('reset/'.esc($resetcode));  ?>" class="resetpass-form" method="POST" id="resetpass-form">
                <h1>Reset Password</h1>
                <input type="password" name="newpass" id="newpass" placeholder="New Password">
                <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password">
                <button type="submit" id="resetpass-btn">Reset Password</button>
            </form>
        </div>

<script src="<?= base_url("public/javascript/login_js.js")?>"></script>