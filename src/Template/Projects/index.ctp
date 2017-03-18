<?php echo $this->element('meta', ['metaTitle' => 'PHP Web Development Projects']); ?>

<div class="portfolio-wrapper">
	<div class="container-fluid">
		<div class="portfolio-header">
			<hr>
			<div class="row">
				<div class="col-md-2">
					<div class="profile-image"></div>
				</div>
				<div class="col-md-9">
					<div class="text">
						<h1>Full Portfolio</h1>
						<div>
							<p class="pull-left">
							Filter By:&emsp;</p>
							<?php
								echo $this->Form->input('ProjectCategory', array(
									'label' => false,
									'empty' => 'All Projects',
									'default' => !empty($currentCategory)? $currentCategory['id'] : 0
								));
							?>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<div class="items-wrapper">
			<div id="ajaxLoader"><h4>Fetching Projects...</h4></div>
			<?php if (!empty($currentCategory)) : ?>
				<h1><?=$currentCategory['name'];?></h1>
			<?php else : ?>
				<p class="text-xs-center">You are currently viewing all of my projects. If you'd like to view a particular category of work, use the dropdown above. Cheers! <i class="fa fa-beer" aria-hidden="true"></i></p>
			<?php endif; ?>

			<?php if(empty($projects)) : ?>
				<div class="row empty--projects">
					<h3>Sorry, I either haven't finished populating this category or currently don't have any projects ready for display.
						<?php echo $this->Html->link('Click here', array('controller' => 'projects', 'action' => 'index')); ?> to clear the filter. <i class="fa fa-thumbs-up" aria-hidden="true"></i>
					</h3>
				</div>
			<?php else : ?>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[0])) : ?>
					<div class="item-wrapper">
						<?php echo $this->Image->resize('/files/Images/' . $projects[0]['images'][0]['filename'], array(
							'width' => 570,
							'height' => 620,
							'htmlAttributes' => array(
								'class' => 'portfolio-item'
							),
							'quality' => 100,
							'crop' => true,
							'autocrop' => true
						)); ?>
						<div class="portfolio__overlay text-xs-center">
							<div class="tall">
								<h3><?=$projects[0]['title']?></h3>
								<p><?=$projects[0]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="0">Find Out More</a>
								<?php if(!empty($projects[0]['url'])) : ?>
									| <a href="<?=$projects[0]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[1])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<!-- <img class="portfolio-item" id="item2" src="http://placehold.it/540x280"> -->
							<?php echo $this->Image->resize('/files/Images/' . $projects[1]['images'][0]['filename'], array(
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
								<h3><?=$projects[1]['title']?></h3>
								<p><?=$projects[1]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="1">Find Out More</a>
								<?php if(!empty($projects[1]['url'])) : ?>
									| <a href="<?=$projects[1]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php if (!empty($projects[2])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[2]['images'][0]['filename'], array(
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
								<h3><?=$projects[2]['title']?></h3>
								<p><?=$projects[2]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="2">Find Out More</a>
								<?php if(!empty($projects[2]['url'])) : ?>
									| <a href="<?=$projects[2]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[3])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[3]['images'][0]['filename'], array(
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
								<h3><?=$projects[3]['title']?></h3>
								<p><?=$projects[3]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="3">Find Out More</a>
								<?php if(!empty($projects[3]['url'])) : ?>
									| <a href="<?=$projects[3]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php if (!empty($projects[4])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[4]['images'][0]['filename'], array(
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
								<h3><?=$projects[4]['title']?></h3>
								<p><?=$projects[4]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="4">Find Out More</a>
								<?php if(!empty($projects[4]['url'])) : ?>
									| <a href="<?=$projects[4]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[5])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[5]['images'][0]['filename'], array(
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
								<h3><?=$projects[5]['title']?></h3>
								<p><?=$projects[5]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="5">Find Out More</a>
								<?php if(!empty($projects[5]['url'])) : ?>
									| <a href="<?=$projects[5]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php if (!empty($projects[6])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[6]['images'][0]['filename'], array(
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
								<h3><?=$projects[6]['title']?></h3>
								<p><?=$projects[6]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="6">Find Out More</a>
								<?php if(!empty($projects[6]['url'])) : ?>
									| <a href="<?=$projects[6]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<?php if (!empty($projects[7])) : ?>
					<div class="item-wrapper">
						<?php echo $this->Image->resize('/files/Images/' . $projects[7]['images'][0]['filename'], array(
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
								<h3><?=$projects[7]['title']?></h3>
								<p><?=$projects[7]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="7">Find Out More</a>
								<?php if(!empty($projects[7]['url'])) : ?>
									| <a href="<?=$projects[7]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[8])) : ?>
					<div class="item-wrapper">
						<?php echo $this->Image->resize('/files/Images/' . $projects[8]['images'][0]['filename'], array(
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
								<h3><?=$projects[8]['title']?></h3>
								<p><?=$projects[8]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="8">Find Out More</a>
								<?php if(!empty($projects[8]['url'])) : ?>
									| <a href="<?=$projects[8]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[9])) : ?>
					<div class="item-wrapper">
						<?php echo $this->Image->resize('/files/Images/' . $projects[9]['images'][0]['filename'], array(
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
								<h3><?=$projects[9]['title']?></h3>
								<p><?=$projects[9]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="9">Find Out More</a>
								<?php if(!empty($projects[9]['url'])) : ?>
									| <a href="<?=$projects[9]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[10])) : ?>
					<div class="item-wrapper">
						<?php echo $this->Image->resize('/files/Images/' . $projects[10]['images'][0]['filename'], array(
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
								<h3><?=$projects[10]['title']?></h3>
								<p><?=$projects[10]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="10">Find Out More</a>
								<?php if(!empty($projects[10]['url'])) : ?>
									| <a href="<?=$projects[10]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<?php if (!empty($projects[11])) : ?>
					<div class="item-wrapper">
						<?php echo $this->Image->resize('/files/Images/' . $projects[11]['images'][0]['filename'], array(
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
								<h3><?=$projects[11]['title']?></h3>
								<p><?=$projects[11]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="11">Find Out More</a>
								<?php if(!empty($projects[11]['url'])) : ?>
									| <a href="<?=$projects[11]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-12">
					<?php if (!empty($projects[12])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[12]['images'][0]['filename'], array(
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
								<h3><?=$projects[12]['title']?></h3>
								<p><?=$projects[12]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="12">Find Out More</a>
								<?php if(!empty($projects[12]['url'])) : ?>
									| <a href="<?=$projects[12]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php if (!empty($projects[13])) : ?>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('/files/Images/' . $projects[13]['images'][0]['filename'], array(
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
								<h3><?=$projects[13]['title']?></h3>
								<p><?=$projects[13]['description']?></p>
								<a href="#" data-toggle="modal" data-target="#findOutMore" data-id="13">Find Out More</a>
								<?php if(!empty($projects[13]['url'])) : ?>
									| <a href="<?=$projects[13]['url'];?>" target="_blank">Visit Project</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<?php foreach ($projects as $key => $project) :
					if ($key <= 13) {
						continue;
					}
				?>
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
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
			<?php endif; ?>
		</div>

		<div class="project__modal">
		  <div class="modal fade" id="findOutMore" tabindex="-1" role="dialog" aria-labelledby="findOutMoreLabel" aria-hidden="true">
		    <div class="modal-dialog modal-lg" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
			    	<a id="visit" href="#" target="_blank">Visit Project</a>
		        </div>
		        <div class="modal-body">
		        	<div class="row">
						<div class="col-md-7">
							<div class="galleria">
								<?php echo $this->Html->image('/img/upload-empty.png', array(
									'data-title' => 'test',
									'data-description' => 'test'
								)); ?>
							</div>
						</div>
						<div class="col-md-5">

							<div class="project__text">
								<?php echo $this->Html->image('/img/zigzag-white.png', array('class' => 'project__logo')); ?>
								<h2>Loading..</h2>
								<p>Please enable JavaScript in your browsers settings</p>
							</div>

							<hr>
							<div class="text-xs-center">
									<?php
										echo $this->Form->create('Project', array(
											'url' => array(
												'controller' => 'projects',
												'action' => 'index'
											)
										));
									?>

									<fieldset>
										<legend>Related Categories</legend>

										<?php
											echo $this->Form->button('Back-end Web Dev', array(
												'value' => 1,
												'name' => 'category'
											));

											echo $this->Form->button('Front-end Web Dev', array(
												'value' => 2,
												'name' => 'category'
											));
										?>

									</fieldset>

									<?php
										echo $this->Form->end();
									?>
							</div>
						</div>
						<div class="text-xs-center"><button type="button" class="close" data-dismiss="modal">Close Window</button></div>
					</div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		initModalToggle(<?=json_encode($projects);?>);
	})
</script>
