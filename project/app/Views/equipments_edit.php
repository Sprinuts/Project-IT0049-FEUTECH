<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <?php if(validation_errors() != null): ?>
            <div class="alert alert-danger">
                <p><?= validation_list_errors(); ?></p>
            </div>
        <?php endif ?>
        <form action="<?= base_url('equipments/edit/'.$equipment['id']); ?>" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="equipmentname" class="form-label">Equipment Name</label>
                <input type="text" name="equipmentname" id="equipmentname" class="form-control" value="<?= $equipment['equipmentname']; ?>">
            </div>

            <div class="form-group mb-2">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control" onchange="updateAccessories()" value="<?= $equipment['category']; ?>">
                    <option value="" disabled selected>Select Category</option>
                    <option value="laptop" <?= set_value('category') == 'laptop' ? 'selected' : '' ?>>Laptop</option>
                    <option value="dlp" <?= set_value('category') == 'dlp' ? 'selected' : '' ?>>DLP</option>
                    <option value="hdmi" <?= set_value('category') == 'hdmi' ? 'selected' : '' ?>>HDMI</option>
                    <option value="vga" <?= set_value('category') == 'vga' ? 'selected' : '' ?>>VGA</option>
                    <option value="dlpremote" <?= set_value('category') == 'dlpremote' ? 'selected' : '' ?>>DLP Remote</option>
                    <option value="mac-keyboard-mouse" <?= set_value('category') == 'mac-keyboard-mouse' ? 'selected' : '' ?>>MAC Laboratory: Keyboard and Mouse</option>
                    <option value="wacom" <?= set_value('category') == 'wacom' ? 'selected' : '' ?>>Wacom Tablet</option>
                    <option value="speaker" <?= set_value('category') == 'speaker' ? 'selected' : '' ?>>Speaker</option>
                    <option value="webcam" <?= set_value('category') == 'webcam' ? 'selected' : '' ?>>Webcam</option>
                    <option value="extension-cord" <?= set_value('category') == 'extension-cord' ? 'selected' : '' ?>>Extension Cord</option>
                    <option value="cable-crimping-tool" <?= set_value('category') == 'cable-crimping-tool' ? 'selected' : '' ?>>Cable Crimping Tool</option>
                    <option value="cable-tester" <?= set_value('category') == 'cable-tester' ? 'selected' : '' ?>>Cable Tester</option>
                    <option value="lab-room-key" <?= set_value('category') == 'lab-room-key' ? 'selected' : '' ?>>Lab Room Key</option>
                </select>
            </div>

            <div class="form-group mb-2" id="accessories-group">
                <label for="accessories" class="form-label">Accessories</label>
                <select name="accessories" id="accessories" class="form-control" disabled>
                    <optgroup>
                    <option value="" disabled selected>Select Accessories</option>
                    <option value="none" <?= set_value('accessories') == 'none' ? 'selected' : '' ?> >None</option>
                    <option value="charger" <?= set_value('accessories') == 'charger' ? 'selected' : '' ?> >Charger</option>
                    <option value="extension-vgahdmicable-powercable" <?= set_value('accessories') == 'extension-vgahdmicable-powercable' ? 'selected' : '' ?> >Extension Cord, VGA/HDMI Cable, Power Cable</option>
                    <option value="lightningcable" <?= set_value('accessories') == 'lightningcable' ? 'selected' : '' ?> >Lightning Cable</option>
                    <option value="pen" <?= set_value('accessories') == 'pen' ? 'selected' : '' ?> disabled>Pen</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= date('Y-m-d', strtotime($equipment['birthdate'])); ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save Changes</button>
                <a href="<?= base_url('equipments'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>