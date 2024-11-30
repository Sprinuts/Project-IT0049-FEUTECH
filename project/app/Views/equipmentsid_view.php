<div class="d-flex align-items-center justify-content-center">
    <link rel="stylesheet" href="<?= base_url('public/style/equiptment_idview.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
    <div class="col col-md-7">
        <form action="" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="id" class="form-label">ID</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span> <!-- ID Badge Icon -->
                    </div>
                    <input type="text" name="id" id="id" class="form-control" value="<?= $equipment['id']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="equipmentname" class="form-label">Equipment Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-toolbox"></i></span> <!-- Toolbox Icon -->
                    </div>
                    <input type="text" name="equipmentname" id="equipmentname" class="form-control" value="<?= $equipment['equipmentname']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="category" class="form-label">Category</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-list-alt"></i></span> <!-- List Icon -->
                    </div>
                    <input type="text" name="category" id="category" class="form-control" value="<?= $equipment['category']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="status" class="form-label">Status</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-info-circle"></i></span> <!-- Info Icon -->
                    </div>
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
            </div>
            <div class="form-group mb-2">
                <label for="datecreated" class="form-label">Date Created</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i></span> <!-- Calendar Day Icon -->
                    </div>
                    <input type="text" name="datecreated" id="datecreated" class="form-control" value="<?= date('Y-m-d', strtotime($equipment['datecreated'])); ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="accessories" class="form-label">Accessories</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-cogs"></i></span> <!-- Cogs Icon -->
                    </div>
                    <input type="text" name="accessories" id="accessories" class="form-control" value="<?= $equipment['accessories']; ?>" readonly>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="description" class="form-label">Description</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-align-left"></i></span> <!-- Description Icon -->
                    </div>
                    <input type="text" name="description" id="description" class="form-control" value="<?= $equipment['description']; ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <a href="<?= base_url('equipments'); ?>" class="btn btn-danger">Go Back</a>
            </div>
        </form>
    </div>
</div>
