<?php if ($pager->hasPages()): ?>
    <link rel="stylesheet" href="<?= base_url('public/style/pager.css') ?>">

    <ul class="pagination">
        <?php if ($pager->getPrevious()): ?>
            <li><a href="<?= $pager->getPrevious() ?>">Previous</a></li>
        <?php endif; ?>

        <?php foreach ($pager->links() as $link): ?>
            <li class="<?= $link['active'] ? 'active' : '' ?>">
                <a href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
        <?php endforeach; ?>

        <?php if ($pager->getNext()): ?>
            <li><a href="<?= $pager->getNext() ?>">Next</a></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
