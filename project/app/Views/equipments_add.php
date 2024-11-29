<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="<?= base_url('users/add'); ?>" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="equipmentname" class="form-label">Equipment Name</label>
                <input type="text" name="equipmentname" id="equipmentname" class="form-control" value="<?= set_value('name')?>">
            </div>

            <div class="form-group mb-2">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="" disabled selected>Select Category</option>
                    <option value="laptop">Laptop</option>
                    <option value="dlp">DLP</option>
                    <option value="hdmi">HDMI</option>
                </select>
            </div>

            <div class="form-group mb-2" id="accessories-group" style="display: none;">
                <select name="accessories" id="accessories" class="form-control" disabled>

                <option value="" disabled selected>Select Accessories</option>

                    <option value="accessory1">Accessory 1</option>

                    <option value="accessory2">Accessory 2</option>

                    <option value="accessory3">Accessory 3</option>

                </select>

                </div>

                </select>
            </div>

            <script>
                document.getElementById('category').addEventListener('change', function() {
                    var accessoriesGroup = document.getElementById('accessories-group');
                    if (this.value === 'category1' || this.value === 'category2') {
                        accessoriesGroup.style.display = 'block';
                    } else {
                        accessoriesGroup.style.display = 'none';
                    }
                });
            </script>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add User</button>
                <a href="<?= base_url('users'); ?>" class="btn btn-danger ms-2">Cancel</a>
            </div>
        </form>
    </div>
</div>