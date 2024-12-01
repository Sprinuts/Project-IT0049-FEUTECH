<head>
</head>
<div>
    <h3 class="text-center">List of Return</h3>
    <div class="adjust">
        <table class="adjustBtn table table-striped table-hover table-light table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Equipment ID</th>
                    <th>Equipment Name</th>
                    <th>Category</th> <!-- remove later -->
                    <th>Status</th> <!-- remove later -->
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($equipments as $equipment): ?>
                <tr>
                    <td><?= $equipment['equipmentid']; ?></td>
                    <td><?= $equipment['equipmentname']; ?></td>
                    <td><?= $equipment['category']; ?></td> <!-- remove later -->
                    <td> <!-- remove later -->
                        <?php 
                            if (!is_null($equipment['reserver'])) {
                                echo 'Reserved';
                            } elseif (!is_null($equipment['borrower'])) {
                                echo 'Borrowed';
                            } else {
                                echo $equipment['status'] == 1 ? 'Available' : 'Deactivated';
                            }
                        ?>
                    </td> <!-- remove later -->
                    <td><?= $equipment['description']; ?></td>

                    <td>
                        <a href="<?= base_url('return/'.$equipment['id']); ?>" class="btn btn-sm btn-warning">Return</a> 
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