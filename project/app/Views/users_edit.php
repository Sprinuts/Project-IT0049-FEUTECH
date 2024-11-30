<div class="d-flex align-items-center justify-content-center">
    <link rel="stylesheet" href="<?= base_url('public/style/user_idview_css.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
    <div class="col col-md-7">
        <?php if (validation_errors() != null): ?>
            <div class="alert alert-danger">
                <p><?= validation_list_errors(); ?></p>
            </div>
        <?php endif ?>
        <form action="<?= base_url('users/edit/' . $user['id']); ?>" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="name" class="form-label">Full Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                    </div>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $user['name']; ?>">
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                    </div>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $user['email']; ?>">
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="role" class="form-label">Role</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-users-cog"></i></span>
                    </div>
                    <select name="role" id="role" class="form-control">
                        <option value="itso" <?= $user['role'] == 'itso' ? 'selected' : ''; ?>>ITSO</option>
                        <option value="associate" <?= $user['role'] == 'associate' ? 'selected' : ''; ?>>Associate</option>
                        <option value="student" <?= $user['role'] == 'student' ? 'selected' : ''; ?>>Student</option>
                    </select>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="birthdate" class="form-label">Birthdate</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= date('Y-m-d', strtotime($user['birthdate'])); ?>">
                </div>
            </div>
            <div class="form-group">
            <br>
                <button type="submit" class="btn btn-success">Save Changes</button>
                <br> 
                <a href="<?= base_url('users'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
