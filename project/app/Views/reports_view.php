<link rel="stylesheet" href="<?= base_url('public/style/reports.css') ?>">

<div class="reports-container">
    <?php foreach($reports as $report): ?>
        <div class="report-item alert alert-success">
            <p class="report-text">
                <span class="report-username">User <?= $report['username'] ?></span>
                <span class="report-action"><?= $report['type'] ?></span>
                <span class="report-equipment"><?= $report['equipmentid'] ?></span>
                <span class="report-equipmentname"><?= $report['equipmentname'] ?></span>
                <span class="report-category"><?= ucfirst(str_replace('-', ' ', $report['category'])) ?></span>
            </p>
        </div>
    <?php endforeach; ?>
</div>

<?= $pager->links(); ?>
=======
    <div class="pagination">
        <?= $pager->links(); ?>
    </div>
</div>
>>>>>>> Stashed changes
