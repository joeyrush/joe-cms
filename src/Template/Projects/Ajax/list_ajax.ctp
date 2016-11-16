<?php if (!empty($currentAjaxCategory)) : ?>
	<h1><?=$currentAjaxCategory['name'];?></h1>
<?php else : ?>
	<p class="text-xs-center">You are currently viewing all of my projects. If you'd like to view a particular category of work, use the dropdown above. Cheers! <i class="fa fa-beer" aria-hidden="true"></i></p>
<?php endif; ?>

<?php if(empty($ajaxProjects)) : ?>
	<div class="row empty--projects">
		<h3>Sorry, I either haven't finished populating this category or currently don't have any projects ready for display. <?php echo $this->Html->link('Click here', array('controller' => 'projects', 'action' => 'index')); ?> to clear the filter. <i class="fa fa-thumbs-up" aria-hidden="true"></i>
		</h3>
	</div>
<?php else : ?>
<div class="row">
	<div class="col-md-4 col-sm-12">
		<?php if (!empty($ajaxProjects[0])) : ?>
		<div class="item-wrapper">
			<?php echo $this->Image->resize($ajaxProjects[0]['images'][0]['filepath'], array(
				'width' => 570, 
				'height' => 610, 
				'htmlAttributes' => array(
					'class' => 'portfolio-item'
				),
				'quality' => 100,
				'crop' => true,
				'autocrop' => true
			)); ?>
			<div class="portfolio__overlay text-xs-center">
				<div class="tall">
					<h3><?=$ajaxProjects[0]['title']?></h3>
					<p><?=$ajaxProjects[0]['description']?></p>
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="0">Find Out More</a> |
					<a href="#">Visit Project</a>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="col-md-4 col-sm-12">
		<?php if (!empty($ajaxProjects[1])) : ?>
		<div class="item-wrapper">
			<div class="half">
				<!-- <img class="portfolio-item" id="item2" src="http://placehold.it/540x280"> -->
				<?php echo $this->Image->resize($ajaxProjects[1]['images'][0]['filepath'], array(
					'width' => 540, 
					'height' => 280, 
					'htmlAttributes' => array(
						'class' => 'portfolio-item'
					),
					'quality' => 100,
					'crop' => true,
					'autocrop' => true
				)); ?>
			</div>
			<div class="portfolio__overlay text-xs-center">
				<div class="short">
					<h3><?=$ajaxProjects[1]['title']?></h3>
					<p><?=$ajaxProjects[1]['description']?></p>
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="1">Find Out More</a> |
					<a href="#">Visit Project</a>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if (!empty($ajaxProjects[2])) : ?>
		<div class="item-wrapper">
			<div class="half">
				<?php echo $this->Image->resize($ajaxProjects[2]['images'][0]['filepath'], array(
					'width' => 540, 
					'height' => 280, 
					'htmlAttributes' => array(
						'class' => 'portfolio-item'
					),
					'quality' => 100,
					'crop' => true,
					'autocrop' => true
				)); ?>
			</div>
			<div class="portfolio__overlay text-xs-center">
				<div class="short">
					<h3><?=$ajaxProjects[2]['title']?></h3>
					<p><?=$ajaxProjects[2]['description']?></p>
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="2">Find Out More</a> |
					<a href="#">Visit Project</a>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="col-md-4 col-sm-12">
		<?php if (!empty($ajaxProjects[3])) : ?>
		<div class="item-wrapper">
			<div class="half">
				<?php echo $this->Image->resize($ajaxProjects[3]['images'][0]['filepath'], array(
					'width' => 540, 
					'height' => 280, 
					'htmlAttributes' => array(
						'class' => 'portfolio-item'
					),
					'quality' => 100,
					'crop' => true,
					'autocrop' => true
				)); ?>
			</div>
			<div class="portfolio__overlay text-xs-center">
				<div class="short">
					<h3><?=$ajaxProjects[3]['title']?></h3>
					<p><?=$ajaxProjects[3]['description']?></p>
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="3">Find Out More</a> |
					<a href="#">Visit Project</a>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if (!empty($ajaxProjects[4])) : ?>
		<div class="item-wrapper">
			<div class="half">
				<?php echo $this->Image->resize($ajaxProjects[4]['images'][0]['filepath'], array(
					'width' => 540, 
					'height' => 280, 
					'htmlAttributes' => array(
						'class' => 'portfolio-item'
					),
					'quality' => 100,
					'crop' => true,
					'autocrop' => true
				)); ?>
			</div>
			<div class="portfolio__overlay text-xs-center">
				<div class="short">
					<h3><?=$ajaxProjects[4]['title']?></h3>
					<p><?=$ajaxProjects[4]['description']?></p>
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="4">Find Out More</a> |
					<a href="#">Visit Project</a>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<?php if (!empty($ajaxProjects[5])) : ?>
			<div class="item-wrapper">
				<div class="half">
					<?php echo $this->Image->resize($ajaxProjects[5]['images'][0]['filepath'], array(
						'width' => 540, 
						'height' => 280, 
						'htmlAttributes' => array(
							'class' => 'portfolio-item'
						),
						'quality' => 100,
						'crop' => true,
						'autocrop' => true
					)); ?>
				</div>
				<div class="portfolio__overlay text-xs-center">
					<div class="short">
						<h3><?=$ajaxProjects[5]['title']?></h3>
						<p><?=$ajaxProjects[5]['description']?></p>
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="5">Find Out More</a> |
						<a href="#">Visit Project</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if (!empty($ajaxProjects[6])) : ?>
			<div class="item-wrapper">
				<div class="half">
					<?php echo $this->Image->resize($ajaxProjects[6]['images'][0]['filepath'], array(
						'width' => 540, 
						'height' => 280, 
						'htmlAttributes' => array(
							'class' => 'portfolio-item'
						),
						'quality' => 100,
						'crop' => true,
						'autocrop' => true
					)); ?>
				</div>
				<div class="portfolio__overlay text-xs-center">
					<div class="short">
						<h3><?=$ajaxProjects[6]['title']?></h3>
						<p><?=$ajaxProjects[6]['description']?></p>
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="6">Find Out More</a> |
						<a href="#">Visit Project</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="col-md-8 col-sm-12">
			<?php if (!empty($ajaxProjects[7])) : ?>
			<div class="item-wrapper">
				<?php echo $this->Image->resize($ajaxProjects[7]['images'][0]['filepath'], array(
						'width' => 1110, 
						'height' => 580, 
						'htmlAttributes' => array(
							'class' => 'portfolio-item'
						),
						'quality' => 100,
						'crop' => true,
						'autocrop' => true
					)); ?>
				<div class="portfolio__overlay text-xs-center">
					<div class="short">
						<h3><?=$ajaxProjects[7]['title']?></h3>
						<p><?=$ajaxProjects[7]['description']?></p>
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="7">Find Out More</a> |
						<a href="#">Visit Project</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<?php foreach ($ajaxProjects as $key => $project) : 
			if ($key <= 7) {
				continue;
			}
		?>
		<div class="col-md-4 col-sm-12">
			<div class="item-wrapper">
				<?php echo $this->Image->resize($project['images'][0]['filepath'], array(
					'width' => 540, 
					'height' => 280, 
					'htmlAttributes' => array(
						'class' => 'portfolio-item'
					),
					'quality' => 100,
					'crop' => true,
					'autocrop' => true
				)); ?>
				<div class="portfolio__overlay text-xs-center">
					<div class="short">
						<h3><?=$project['title']?></h3>
						<p><?=$project['description']?></p>
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="<?=$key;?>">Find Out More</a> |
						<a href="#">Visit Project</a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>

<script>
	$(document).ready(function(){
		initModalToggle(<?=json_encode($ajaxProjects);?>);
	})
</script>
