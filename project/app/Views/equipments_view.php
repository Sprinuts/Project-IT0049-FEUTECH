<div>
    <h3 class="text-center">List of Equiment</h3>
    <div class="adjust">
        <a href="<?= base_url('equipments/add'); ?>" class="btn btn-lg btn-success adjustBtn">Add New Equipment</a>
        <table class="adjustBtn table table-striped table-hover table-light table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Equipment ID</th>
                    <th>Equipment Name</th>
                    <th>Status</th>
                    <th>Borrowed</th>
                    <th>Reserved</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($equipments as $equipment): ?>
                <tr>
                    <td><?= $equipment->id; ?></td>
                    <td><?= $equipment->equipmentid; ?></td>
                    <td><?= $equipment->equipmentname; ?></td>
                    <td><?= $equipment->status == 1 ? 'Activated' : 'Deactivated'; ?></td>
                    <td><?= $equipment->borrower; ?></td>
                    <td><?= $equipment->reserver; ?></td>
                    <td><?= strtolower($equipment->role) == 'itso' ? strtoupper($equipment->role) : ucfirst($equipment->role); ?></td>
                    <td>
                        <a href="<?= base_url('equipments/view/'.$equipment->id); ?>" class="btn btn-sm btn-warning">View</a>
                        <a href="<?= base_url('equipments/edit/'.$equipment->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="<?= base_url('equipments/delete/'.$equipment->id); ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>