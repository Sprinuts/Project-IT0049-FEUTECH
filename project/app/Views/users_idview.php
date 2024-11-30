<div class="d-flex align-items-center justify-content-center">
    <link rel="stylesheet" href="<?= base_url('public/style/user_idview_css.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
    <div class="col col-md-7">
        <form action="" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="id" class="form-label">ID</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span> <!-- ID Badge Icon -->
                    </div>
                    <input type="text" name="id" id="id" class="form-control" value="<?= $user['id']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-circle"></i></span> <!-- User Circle Icon -->
                    </div>
                    <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span> <!-- Open Email Icon -->
                    </div>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="name" class="form-label">Full Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span> <!-- User Tag Icon -->
                    </div>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $user['name']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="status" class="form-label">Status</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-check-circle"></i></span> <!-- Check Circle Icon -->
                    </div>
                    <input type="text" name="status" id="status" class="form-control" value="<?= $user['status'] == 1 ? 'Activated' : 'Deactivated'; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="role" class="form-label">Role</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-users-cog"></i></span> <!-- Users Cog Icon -->
                    </div>
                    <input type="text" name="role" id="role" class="form-control" value="<?= strtolower($user['role']) == 'itso' ? strtoupper($user['role']) : ucfirst($user['role']); ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="birthdate" class="form-label">Birthdate</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span> <!-- Calendar Alt Icon -->
                    </div>
                    <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= date('Y-m-d', strtotime($user['birthdate'])); ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="datecreated" class="form-label">Date Created</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i></span> <!-- Calendar Day Icon -->
                    </div>
                    <input type="date" name="datecreated" id="datecreated" class="form-control" value="<?= date('Y-m-d', strtotime($user['birthdate'])); ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <a href="<?= base_url('users'); ?>" class="btn btn-danger">Go Back</a>
            </div>
        </form>
    </div>
</div>
