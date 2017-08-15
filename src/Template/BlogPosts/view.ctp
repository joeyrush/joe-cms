<?php echo $this->element('meta', ['metaTitle' => $blogPost['name']]); ?>

<div class="blog blog__detail">
	<div class="container">
		<div class="blog__wrapper">
			<div class="blog-head">
				<h1><i class="fa fa-diamond" aria-hidden="true"></i> Joe's Programming Blog</h1>
			</div>

			<div class="blog__content">
				<h2><?=$blogPost['name'];?></h2>
				<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('dS F Y', $blogPost['created']->toUnixString());?></span>
				<?php if (!empty($blogPost['reading_time'])) : ?>
					<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> Reading Time: <strong><?=$blogPost['reading_time'];?> mins</strong></span>
				<?php endif; ?>
				<div class="tags__wrapper">
					<h5>Tags: <?php foreach ($blogPost['tags'] as $tag): ?>

					<span class="tag"><?=$tag['name'];?></span>

					<?php endforeach; ?>

					</h5>
				</div>

				<hr>

				<div class="wysiwyg">
					<?=$blogPost['body'];?>
				</div>
			</div>
			<div class="blog-foot">
				<?php
					echo $this->Html->link('<i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to blog', array(
						'controller' => 'BlogPosts',
						'action' => 'index'
					), array(
						'escape' => false
					));
				?>
			</div>
		</div>
	</div>
</div>
