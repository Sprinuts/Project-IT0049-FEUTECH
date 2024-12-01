
<?php foreach($reports as $report): ?>


    <div class="alert alert-success">
        <p>User <?= $report['username'] ?> <?= $report['type']?> <?= $report['equipmentid']?></p>
    </div>

<?php endforeach; ?>

<?= $pager->links(); ?>