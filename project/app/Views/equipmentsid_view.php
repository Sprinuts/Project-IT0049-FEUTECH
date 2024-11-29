<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="id" class="form-label">ID</label>
                <input type="text" name="id" id="id" class="form-control" value="<?= $equipment['id']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="equipmentname" class="form-label">Equipment Name</label>
                <input type="text" name="equipmentname" id="equipmentname" class="form-control" value="<?= $equipment['equipmentname']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="<?= $equipment['category']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="<?php 
                            if (!is_null($equipment['reserver'])) {
                                echo 'Reserved';
                            } elseif (!is_null($equipment['borrower'])) {
                                echo 'Borrowed';
                            } else {
                                echo $equipment['status'] == 1 ? 'Available' : 'Deactivated';
                            }
                        ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="datecreated" class="form-label">Date Created</label>
                <input type="text" name="datecreated" id="datecreated" class="form-control" value="<?= date('Y-m-d', strtotime($equipment['datecreated'])); ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="accessories" class="form-label">Accessories</label>
                <input type="date" name="accessories" id="accessories" class="form-control" value="<?= $equipment['accessories']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="description" class="form-label">Description</label>
                <input type="date" name="description" id="description" class="form-control" value="<?= $equipment['description']; ?>" readonly>
            </div>

            <div class="form-group">
                <a href="<?= base_url('equipments'); ?>" class="btn btn-danger">Go Back</a>
            </div>
        </form>
    </div>
</div>
