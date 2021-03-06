 <?php echo $this->element('meta', ['metaTitle' => 'Web Development Blog | Joe Rushton']); ?>

<div class="blog">
	<div class="container">
		<div class="tweets__wrapper">
			<div class="twitter__listing">
				<div class="row">
					<?php foreach ($tweets as $tweet) : ?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="tweet match-height">
									<i class="fa fa-twitter"></i>
									<blockquote class="blockquote">
										<a href="<?= $tweet['url']; ?>" target="_blank"><?= $tweet['message']; ?> <small>(click to view full tweet)</small></a>
									</blockquote>
									<span class="meta"><strong><?= $tweet['retweets']; ?></strong> Retweets</span>
									<span class="meta"><strong><?= $tweet['likes']; ?></strong> Likes</span>
									<div class="pull-right">
										<span class="meta date"><?= $tweet['date']; ?></span>
									</div>
								</div>
							</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="blog__wrapper">
			<div class="blog-head">
				<h1><i class="fa fa-diamond" aria-hidden="true"></i> Joe's Programming Blog</h1>
			</div>

			<div class="row">
				<div class="form__wrapper">
				<?php echo $this->Form->create('BlogPost'); ?>
					<p>Display blog posts related to:</p>
					<?=$this->Form->input('Tags.name', array(
						'options' => $tags,
						'multiple' => 'checkbox',
						'label' => false,
						'templates' => [
        						'checkboxWrapper' => '<div class="custom-checkbox checkbox">{{label}}</div>',
    						]
    					)); ?>
					<?=$this->Form->button('Filter', ['class' => 'snip1535']); ?>
				<?php echo $this->Form->end(); ?>
				</div>
			</div>
			<hr>
			<div class="blog__listing">
			<?php if(!empty($blogPosts)) : ?>
				<?php foreach ($blogPosts as $blogPost): ?>
					<div class="row">
						<div class="col-md-4">
							<?php
								$img = $this->Image->resize('/files/Images/' . $blogPost['images'][0]['filename'], array(
									'width' => 299,
									'height' => 250,
									'quality' => 100,
									'crop' => true,
									'autocrop' => true
								));

								$url = array(
									'controller' => 'BlogPosts',
									'action' => 'view',
									'slug' => $blogPost['slug']
								);

								echo $this->Html->link($img, $url, array('escape' => false, 'class' => 'blog__link'));
							?>
						</div>
						<div class="col-md-8">
							<div class="blog__text">
								<?=$this->Html->link('<h2>' . $blogPost['name'] . '</h2>', $url, array('escape' => false)); ?></a>
								<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('dS F Y', $blogPost['created']->toUnixString());?> 
									<?php if (!empty($blogPost['reading_time'])) : ?>
										<span class="separator">|</span> <i class="fa fa-clock-o" aria-hidden="true"></i> <?=$blogPost['reading_time'];?> mins
									<?php endif; ?>
								</p>
								<p><?=strip_tags($this->Text->truncate($blogPost['body'], 120));?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else: ?>
			<p>Sorry I haven't written any blog posts for the selected tags, watch my space though.</p>
			<?php endif; ?>
			</div>
		</div>

	</div>
</div>
