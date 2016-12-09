    <div class="jumbotron jumbotron-home">
      <div class="container-fluid">
      	<div class="row">
      		<div class="photo-text-wrapper">
	      		<div class="col-md-3 offset-md-1">
	      			<div class="home-profile"></div>
	      		</div>
	      		<div class="col-md-7" id="text-wrapper">
			        <h1 class="display-3">Joseph Rushton</h1>
			        <p>Just incase you didn't quite get it from the web address and size 55 font above, my name is Joe and I make pretty websites. I like writing robust code, lifting heavy weights and playing clean guitar riffs. <a href="pages/outside-of-work">Read More</a></p>
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
							$img = $this->Html->image('/img/mysql.png', array('class' => 'img-responsive')); 
							$text = "<h2>SQL and Database <br>Development</h2>";
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
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php 
							$img = $this->Html->image('/img/photoshop.png', array('class' => 'img-responsive')); 
							$text = "<h2>Web and Graphic <br>Design</h2>";
							echo $this->Form->create('Project', array(
								'url' => array(
									'controller' => 'projects',
									'action' => 'index'
								)
							));
							echo $this->Form->button($img . ' ' . $text, array(
								'value' => 5,
								'name' => 'category'
							));

							echo $this->Form->end();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="jumbotron jumbotron-portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-md-center col-portfolio">
					<div>
						<?php echo $this->Image->resize('img/uploads/portfolio/item01.png', array(
							'width' => 380,
							'height' => 250,
							'htmlAttributes' => array(
								'class' => 'img-1'
							),
							'crop' => true,
							'autocrop' => true
						)); ?>
						<?php echo $this->Image->resize('img/uploads/portfolio/item02.png', array(
							'width' => 380,
							'height' => 250,
							'htmlAttributes' => array(
								'class' => 'img-2'
							),
							'crop' => true,
							'autocrop' => true
						)); ?>
						<?php echo $this->Image->resize('img/uploads/portfolio/item03.png', array(
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
				<div class="col-md-6 text-md-center">
					<div class="scribble-bg"></div>
					<div class="text">
						<h2 class="text-xs-center">Portfolio</h2>
						<p>I've categorized all of my work to make it nice and easy for you to see the projects I've created or contributed towards. <?php echo $this->Html->link('View Full Portfolio', array('controller' => 'projects', 'action' => 'index'))?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="mailto"></a>
	<div class="jumbotron jumbotron-contact">
		<?= $this->Flash->render() ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-md-center contact--text">
					<h2>Give me a shout..</h2>
					<h3><small>Ask me how much I bench or tell me how bad my website is, I'm always happy to chat <i class="fa fa-smile-o" aria-hidden="true"></i></small></h3>
					
					<div class="quotes">
						<div class="quote" id="quote1">
							<blockquote><p>"Random inspiring quote that cycles round automatically forever and ever"</p></blockquote>
							<p class="text-md-right">~ Author</p>
						</div>
						<div class="quote">
							<blockquote><p>"Another quote that loops round in an infinite loop for eternity"</p></blockquote>
							<p class="text-md-right">~ Author2</p>
						</div>
						<div class="quote">
							<blockquote><p>"The third and final quote of these series of quotes that cycle round automiatcally"</p></blockquote>
							<p class="text-md-right">~ Author3</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-md-center contact--form">
					<?php echo $this->Form->create('ContactForm', array(
						'url' => array(
							'controller' => 'contact_form',
							'action' => 'email'
						)
					)); ?>
						<?php echo $this->Form->input('name', array('placeholder' => 'Name', 'label' => false)) ?>
						<?php echo $this->Form->input('email', array('placeholder' => 'Email', 'label' => false)) ?>
						<?php echo $this->Form->input('message', array('type' => 'textarea', 'placeholder' => 'Message', 'label' => false)) ?>
						<?php echo $this->Form->submit('Send', array('id' => 'send')) ?>

					<?php echo $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>