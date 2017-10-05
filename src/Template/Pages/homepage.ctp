<?php echo $this->element('meta', ['metaTitle' => 'Homepage - Web Development Portfolio | Joe Rushton']); ?>

    <div class="jumbotron jumbotron-home">
      <div class="container-fluid">
      	<div class="row">
      		<div class="photo-text-wrapper">
	      		<div class="col-md-3 offset-md-1">
	      			<div class="home-profile"></div>
	      		</div>
	      		<div class="col-md-7 scroll-to-display" id="text-wrapper">
			        <h1 class="display-3">Joseph Rushton 💪</h1>
			        <p>Just incase you didn't quite get it from the web address and size 55 font above, my name is Joe and I make pretty websites. I like writing robust code, lifting heavy weights and playing clean guitar riffs. <?php echo $this->Html->link('Read my blog', array('controller' => 'BlogPosts', 'action' => 'index')); ?></p>
			    </div>
			</div>
	    </div>
      </div>
    </div>

	<div class="jumbotron jumbotron-key-skills">
		<div class="container-fluid">
			<span><i class="fa fa-star" aria-hidden="true"></i> Areas of Expertise</span>
			<div class="row">
				<div class="col-md-2 offset-md-1 text-md-center">
					<div class="key-skill">
						<?php
							$img = $this->Html->image('/img/front-end.png', array('class' => 'img-responsive'));
							$text = "<h2>Front-end <br>Web Development</h2>";

							// we create a mini form as we need to post the category id to the projects listing
							echo $this->Form->create('Project', array(
								'url' => array(
									'controller' => 'projects',
									'action' => 'index'
								)
							));
							echo $this->Form->button($img . ' ' . $text, array(
								'value' => 2,
								'name' => 'category'
							));

							echo $this->Form->end();
						?>
					</div>
				</div>
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php
							$img = $this->Html->image('/img/php.png', array('class' => 'img-responsive'));
							$text = "<h2>Back-end <br>Web Development</h2>";

							echo $this->Form->create('Project', array(
								'url' => array(
									'controller' => 'projects',
									'action' => 'index'
								)
							));
							echo $this->Form->button($img . ' ' . $text, array(
								'value' => 1,
								'name' => 'category'
							));

							echo $this->Form->end();
						?>
					</div>
				</div>
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php
							$img = $this->Html->image('/img/LaravelLogo.png', array('class' => 'img-responsive'));
							$text = "<h2>Laravel Framework</h2>";
							echo $this->Form->create('Project', array(
								'url' => array(
									'controller' => 'projects',
									'action' => 'index'
								)
							));
							echo $this->Form->button($img . ' ' . $text, array(
								'value' => 8,
								'name' => 'category'
							));

							echo $this->Form->end();
						?>
					</div>
				</div>
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php
							$img = $this->Html->image('/img/mysql.png', array('class' => 'img-responsive'));
							$text = "<h2>SQL and Data <br>Management</h2>";
							echo $this->Form->create('Project', array(
								'url' => array(
									'controller' => 'projects',
									'action' => 'index'
								)
							));
							echo $this->Form->button($img . ' ' . $text, array(
								'value' => 4,
								'name' => 'category'
							));

							echo $this->Form->end();
						?>
					</div>
				</div>
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php
							$img = $this->Html->image('/img/cakephp.png', array('class' => 'img-responsive'));
							$text = "<h2>CakePHP <br>MVC Framework</h2>";
							echo $this->Form->create('Project', array(
								'url' => array(
									'controller' => 'projects',
									'action' => 'index'
								)
							));
							echo $this->Form->button($img . ' ' . $text, array(
								'value' => 3,
								'name' => 'category'
							));

							echo $this->Form->end();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-portfolio" id="particles-js">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-md-center col-portfolio">
					<div class="image-wrapper">
						<?php echo $this->Image->resize('img/item01.jpg', array(
							'width' => 380,
							'height' => 250,
							'htmlAttributes' => array(
								'class' => 'img-1'
							),
							'crop' => true,
							'autocrop' => true
						)); ?>
						<?php echo $this->Image->resize('img/item02.jpg', array(
							'width' => 380,
							'height' => 250,
							'htmlAttributes' => array(
								'class' => 'img-2'
							),
							'crop' => true,
							'autocrop' => true
						)); ?>
						<?php echo $this->Image->resize('img/item03.jpg', array(
							'width' => 380,
							'height' => 250,
							'htmlAttributes' => array(
								'class' => 'img-3'
							),
							'crop' => true,
							'autocrop' => true
						)); ?>
					</div>
				</div>
				<div class="col-md-6 text-md-center scroll-to-display">
					<div class="scribble-bg"></div>
					<div class="text">
						<h2 class="text-xs-center">Portfolio</h2>
						<p>I've categorized all of my work to make it nice and easy for you to see the projects I've created or contributed towards. <?php echo $this->Html->link('View Full Portfolio', array('controller' => 'projects', 'action' => 'index'))?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

