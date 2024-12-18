<div>
    <link rel="stylesheet" href="<?= base_url('public/style/users_cs.css') ?>">
    <h3 class="text-center">List of Users</h3>
    <div class="adjust">
        <a href="<?= base_url('users/add'); ?>" class="btn btn-lg btn-success adjustBtn">Add New User</a>
        <table class="adjustBtn table table-striped table-hover table-light table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['status'] == 1 ? 'Activated' : 'Deactivated'; ?></td>
                    <td><?= strtolower($user['role']) == 'itso' ? strtoupper($user['role']) : ucfirst($user['role']); ?></td>
                    <td>
                        <a href="<?= base_url('users/view/'.$user['id']); ?>" class="btn btn-sm btn-warning">View</a>
                        <a href="<?= base_url('users/edit/'.$user['id']); ?>" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="<?= base_url('users/delete/'.$user['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <?= $pager->links(); ?>
        </div>
    </div>
</div>
