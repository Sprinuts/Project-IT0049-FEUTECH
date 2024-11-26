<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="<?= base_url('users/add'); ?>" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="name" class="form-label">Fullname</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add User</button>
                <a href="<?= base_url('users'); ?>" class="btn btn-danger ms-2">Cancel</a>
            </div>
        </form>
    </div>
</div>