<link rel="stylesheet" href="<?= base_url('public/style/reports.css') ?>">

<div class="container">
    <div class="reports-container">
        <?php foreach($reports as $report): ?>
            <div class="report-item alert alert-success">
                <p class="report-text">
                    <span class="report-username"><?= $report['username'] ?></span>
                    <span class="report-action"><?= $report['type'] ?></span>
                    <span class="report-equipment"><?= $report['equipmentid'] ?></span>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?= $pager->links(); ?>
    </div>
</div>
