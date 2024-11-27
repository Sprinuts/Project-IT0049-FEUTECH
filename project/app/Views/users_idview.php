<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="id" class=" form-label">ID</label>
                <input type="text" name="id" id="id" class="form-control" value="<?= $user['id']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="username" class=" form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $user['email']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="name" class="form-label">Fullname</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $user['name']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="<?= $user['status'] == 1 ? 'Activated' : 'Deactivated'; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="role" class="form-label">Role</label>
                <input type="text" name="role" id="role" class="form-control" value="<?= strtolower($user['role']) == 'itso' ? strtoupper($user['role']) : ucfirst($user['role']); ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= date('Y-m-d', strtotime($user['birthdate'])); ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="datecreated" class="form-label">Date Created</label>
                <input type="date" name="datecreated" id="datecreated" class="form-control" value="<?= date('Y-m-d', strtotime($user['birthdate'])); ?>" readonly>
            </div>

            <div class="form-group">
                <a href="<?= base_url('users'); ?>" class="btn btn-danger">Go Back</a>
            </div>
        </form>
    </div>
</div>