<section class="content-header">
	<h1>
		<?= isset($title) ? $title : '' ?>
	</h1>
	<ol class="breadcrumb">
		<?php if( isset($breadcrumbs) && is_array($breadcrumbs) ): ?>
			<?php foreach ($breadcrumbs as $crumb): ?>
				<li<?= isset($crumb['active']) && $crumb['active'] ? ' class="active"' : ''?>>
					<?php if(isset($crumb['url'])): ?>
						<a href="<?= $crumb['url'] ?>"><i class="<?= isset($crumb['icon']) ? $crumb['icon'] : '' ?>"></i> <?= $crumb['label'] ?></a>
					<?php else: ?>
						<?= $crumb['label'] ?>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		<?php endif; ?>
	</ol>
</section>
