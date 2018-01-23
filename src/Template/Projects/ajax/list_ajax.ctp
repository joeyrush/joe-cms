<div id="ajaxLoader"><h4>Fetching Projects...</h4></div>
<?php if (!empty($currentAjaxCategory)) : ?>
	<h1><?=$currentAjaxCategory['name'];?></h1>
<?php else : ?>
	<p class="text-xs-center">You are currently viewing all of my projects. If you'd like to view a particular category or type of work, use the filters above 🧐.</p>
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
		<div class="item-wrapper" data-commercial="<?=$ajaxProjects[0]['is_commercial']?>">
			<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[0]['images'][0]['filename'], array(
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
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="0">Find Out More</a>
					<?php if(!empty($ajaxProjects[0]['url'])) : ?>
						| <a href="<?=$ajaxProjects[0]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="col-md-4 col-sm-12">
		<?php if (!empty($ajaxProjects[1])) : ?>
		<div class="item-wrapper" data-commercial="<?=$ajaxProjects[1]['is_commercial']?>">
			<div class="half">
				<!-- <img class="portfolio-item" id="item2" src="http://placehold.it/540x280"> -->
				<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[1]['images'][0]['filename'], array(
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
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="1">Find Out More</a>
					<?php if(!empty($ajaxProjects[1]['url'])) : ?>
						| <a href="<?=$ajaxProjects[1]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if (!empty($ajaxProjects[2])) : ?>
		<div class="item-wrapper" data-commercial="<?=$ajaxProjects[2]['is_commercial']?>">
			<div class="half">
				<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[2]['images'][0]['filename'], array(
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
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="2">Find Out More</a>
					<?php if(!empty($ajaxProjects[2]['url'])) : ?>
						| <a href="<?=$ajaxProjects[2]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="col-md-4 col-sm-12">
		<?php if (!empty($ajaxProjects[3])) : ?>
		<div class="item-wrapper" data-commercial="<?=$ajaxProjects[3]['is_commercial']?>">
			<div class="half">
				<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[3]['images'][0]['filename'], array(
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
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="3">Find Out More</a>
					<?php if(!empty($ajaxProjects[3]['url'])) : ?>
						| <a href="<?=$ajaxProjects[3]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if (!empty($ajaxProjects[4])) : ?>
		<div class="item-wrapper" data-commercial="<?=$ajaxProjects[4]['is_commercial']?>">
			<div class="half">
				<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[4]['images'][0]['filename'], array(
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
					<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="4">Find Out More</a>
					<?php if(!empty($ajaxProjects[4]['url'])) : ?>
						| <a href="<?=$ajaxProjects[4]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<?php if (!empty($ajaxProjects[5])) : ?>
			<div class="item-wrapper" data-commercial="<?=$ajaxProjects[5]['is_commercial']?>">
				<div class="half">
					<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[5]['images'][0]['filename'], array(
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
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="5">Find Out More</a>
						<?php if(!empty($ajaxProjects[5]['url'])) : ?>
						| <a href="<?=$ajaxProjects[5]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if (!empty($ajaxProjects[6])) : ?>
			<div class="item-wrapper" data-commercial="<?=$ajaxProjects[6]['is_commercial']?>">
				<div class="half">
					<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[6]['images'][0]['filename'], array(
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
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="6">Find Out More</a>
						<?php if(!empty($ajaxProjects[6]['url'])) : ?>
						| <a href="<?=$ajaxProjects[6]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="col-md-8 col-sm-12">
			<?php if (!empty($ajaxProjects[7])) : ?>
			<div class="item-wrapper" data-commercial="<?=$ajaxProjects[7]['is_commercial']?>">
				<?php echo $this->Image->resize('/files/Images/' . $ajaxProjects[7]['images'][0]['filename'], array(
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
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="7">Find Out More</a>
						<?php if(!empty($ajaxProjects[7]['url'])) : ?>
						| <a href="<?=$ajaxProjects[7]['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<?php foreach ($ajaxProjects as $key => $project) : 
			// everything after the 6th project can just fly into a 3 column grid layout
			if ($key <= 7) {
				continue;
			}
		?>
		<div class="col-md-4 col-sm-12">
			<div class="item-wrapper" data-commercial="<?=$project['is_commercial']?>">
				<?php echo $this->Image->resize('/files/Images/' . $project['images'][0]['filename'], array(
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
						<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="<?=$key;?>">Find Out More</a>
						<?php if(!empty($project['url'])) : ?>
						| <a href="<?=$project['url'];?>" target="_blank">Visit Project</a>
					<?php endif; ?>
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
