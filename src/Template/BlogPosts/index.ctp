<div class="blog">	
	<div class="container">
		<div class="blog__wrapper">
			<div class="blog-head">
				<h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Blog Posts</h1>	
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
					<?=$this->Form->submit('Filter'); ?>
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
									$blogPost['id']
								);

								echo $this->Html->link($img, $url, array('escape' => false, 'class' => 'blog__link'));
							?>
						</div>
						<div class="col-md-8">
							<div class="blog__text">
								<?=$this->Html->link('<h2>' . $blogPost['name'] . '</h2>', $url, array('escape' => false)); ?></a>
								<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=$this->Time->format($blogPost['created'], \IntlDateFormatter::MEDIUM);?></p>
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