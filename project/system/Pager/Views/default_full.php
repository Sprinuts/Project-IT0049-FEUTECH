<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<style>
    .pagination .page-link {
        color: #28a745; /* Green text color */
    }

    .pagination .page-link:hover {
        background-color: #28a745; /* Green background on hover */
        color: #fff; /* White text on hover */
    }

    .pagination .active .page-link {
        background-color: #28a745; /* Green background for active */
        border-color: #28a745; /* Border color for active */
        color: #fff; /* White text for active */
    }
</style>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination justify-content-center">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="page-item">
				<a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
					<span aria-hidden="true">&laquo; <?= lang('Pager.first') ?></span>
				</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
					<span aria-hidden="true">&lsaquo; <?= lang('Pager.previous') ?></span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li class="page-item <?= $link['active'] ? 'active' : '' ?>">
				<a class="page-link" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li class="page-item">
				<a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true"><?= lang('Pager.next') ?> &rsaquo;</span>
				</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
					<span aria-hidden="true"><?= lang('Pager.last') ?> &raquo;</span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>
