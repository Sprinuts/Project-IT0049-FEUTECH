<div class="d-flex align-items-center justify-content-center">
        <form action="<?= base_url('reserve/reserving/id/'.esc($id)); ?>" method="post" class="adjust">
            <div class="form-group mb-3">
                <label for="datetoborrow" class="form-label" style="font-weight: bold; font-size: 16px;">Date to Reserve</label>
                <input type="date" name="datetoborrow" id="datetoborrow" class="form-control" style="border-radius: 5px; padding: 10px; border: 1px solid #ddd;">
            </div>

            <div class="form-group-button">
                <button type="submit" class="btn btn-success">Reserve</button>
                <a href="<?= base_url('reserve'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
