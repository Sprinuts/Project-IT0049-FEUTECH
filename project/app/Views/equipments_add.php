<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="<?= base_url('users/add'); ?>" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="equipmentname" class="form-label">Equipment Name</label>
                <input type="text" name="equipmentname" id="equipmentname" class="form-control" value="<?= set_value('name')?>">
            </div>

            <div class="form-group mb-2">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control" onchange="updateAccessories()">
                    <option value="" disabled selected>Select Category</option>
                    <option value="laptop">Laptop</option>
                    <option value="dlp">DLP</option>
                    <option value="hdmi">HDMI</option>
                    <option value="vga">VGA</option>
                    <option value="dlpremote">DLP Remote</option>
                    <option value="mac-keyboard-mouse">MAC Laboratory: Keyboard and Mouse</option>
                    <option value="wacom">Wacom Tablet</option>
                    <option value="speaker">Speaker</option>
                    <option value="webcam">Webcam</option>
                    <option value="extension-cord">Extension Cord</option>
                    <option value="cable-crimping-tool">Cable Crimping Tool</option>
                    <option value="cable-tester">Cable Tester</option>
                    <option value="lab-room-key">Lab Room Key</option>
                </select>
            </div>

            <div class="form-group mb-2" id="accessories-group">
                <label for="accessories" class="form-label">Accessories</label>
                <select name="accessories" id="accessories" class="form-control" disabled>
                    <option value="" disabled selected>Select Accessories</option>
                    <option value="none" disabled>None</option>
                    <option value="charger" disabled>Charger</option>
                    <option value="extension-vgahdmicable-powercable" disabled>Extension Cord, VGA/HDMI Cable, Power Cable</option>
                    <option value="lightningcable" disabled>Lightning Cable</option>
                    <option value="pen" disabled>Pen</option>
                </select>
            </div>

            <div class="form-group mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3"><?= set_value('description')?></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add User</button>
                <a href="<?= base_url('users'); ?>" class="btn btn-danger ms-2">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script src="<?= base_url('public/javascript/equipmentadd_js.js'); ?>"></script>