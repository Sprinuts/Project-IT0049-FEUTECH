<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <?php if(validation_errors() != null): ?>
            <div class="alert alert-danger">
                <p><?= validation_list_errors(); ?></p>
            </div>
        <?php endif ?>
        <form action="<?= base_url('users/add'); ?>" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="name" class="form-label">Fullname</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name')?>">
            </div>

            <div class="form-group mb-2">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= set_value('birthdate')?>">
            </div>

            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" <?= set_value('email')?>>
            </div>

            <div class="form-group mb-2">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="itso" <?= set_value('role') == 'itso' ? 'selected' : '' ?>>ITSO</option>
                    <option value="associate" <?= set_value('role') == 'associate' ? 'selected' : '' ?>>Associate</option>
                    <option value="student" <?= set_value('role') == 'student' ? 'selected' : '' ?>>Student</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add User</button>
                <a href="<?= base_url('users'); ?>" class="btn btn-danger ms-2">Cancel</a>
            </div>
        </form>
    </div>
</div>