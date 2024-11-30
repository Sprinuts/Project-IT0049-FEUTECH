<div class="d-flex align-items-center justify-content-center">
    <!-- Connect External CSS -->
    <link rel="stylesheet" href="<?= base_url('public/style/user_idview_css.css') ?>">

    <!-- Inline styles for additional customizations -->
    <div class="col col-md-6" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <?php if(validation_errors() != null): ?>
            <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px;">
                <p><?= validation_list_errors(); ?></p>
            </div>
        <?php endif ?>
        <form action="<?= base_url('users/add'); ?>" method="post" class="adjust">
            <div class="form-group mb-3">
                <label for="name" class="form-label" style="font-weight: bold; font-size: 16px;">Fullname</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name')?>" style="border-radius: 5px; padding: 10px; border: 1px solid #ddd;">
            </div>

            <div class="form-group mb-3">
                <label for="birthdate" class="form-label" style="font-weight: bold; font-size: 16px;">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= set_value('birthdate')?>" style="border-radius: 5px; padding: 10px; border: 1px solid #ddd;">
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label" style="font-weight: bold; font-size: 16px;">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= set_value('email')?>" style="border-radius: 5px; padding: 10px; border: 1px solid #ddd;">
            </div>

            <div class="form-group mb-3">
                <label for="role" class="form-label" style="font-weight: bold; font-size: 16px;">Role</label>
                <select name="role" id="role" class="form-control" style="border-radius: 5px; padding: 10px; border: 1px solid #ddd;">
                    <option value="itso" <?= set_value('role') == 'itso' ? 'selected' : '' ?>>ITSO</option>
                    <option value="associate" <?= set_value('role') == 'associate' ? 'selected' : '' ?>>Associate</option>
                    <option value="student" <?= set_value('role') == 'student' ? 'selected' : '' ?>>Student</option>
                </select>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <button type="submit" class="btn btn-success" style="padding: 10px 20px; border-radius: 5px; font-size: 16px;">Add User</button>
                <br>
                <a href="<?= base_url('users'); ?>" class="btn btn-danger ms-2" style="padding: 10px 20px; border-radius: 5px; font-size: 16px; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </div>
</div>
