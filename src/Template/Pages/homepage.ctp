    <div class="jumbotron jumbotron-home">
      <div class="container-fluid">
      	<div class="row">
      		<div class="photo-text-wrapper">
	      		<div class="col-md-4 offset-md-1">
	      			<div class="home-profile"></div>
	      		</div>
	      		<div class="col-md-7" id="text-wrapper">
			        <h1 class="display-3">Joseph Rushton</h1>
			        <p>Just incase you didn't quite get it from the web address and size 55 font above, my name is Joe and I make pretty websites. I like writing robust code, lifting heavy weights and playing clean guitar riffs.</p>
			        <p><a class="btn" href="#" role="button">Find Out More <i class="fa fa-share" aria-hidden="true"></i></a></p>
			    </div>
			</div>
	    </div>
      </div>
    </div>

	<div class="jumbotron jumbotron-key-skills">
		<div class="container-fluid">
			<span>Areas of Expertise</span>
			<div class="row">
				<div class="col-md-2 offset-md-1 text-md-center">
					<div class="key-skill">
						<?php echo $this->Html->image('/img/front-end.png', array('class' => 'img-responsive')); ?>
						<h2>Front-end <br>Web Development</h2>
					</div>
				</div>
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php echo $this->Html->image('/img/php.png'); ?>
						<h2>Back-end <br>Web Development</h2>
					</div>
				</div>	
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php echo $this->Html->image('/img/mysql.png'); ?>
						<h2>SQL and Database <br>Development</h2>
					</div>
				</div>	
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php echo $this->Html->image('/img/cakephp.png'); ?>
						<h2>CakePHP <br>MVC Framework</h2>
					</div>
				</div>
				<div class="col-md-2 text-md-center">
					<div class="key-skill">
						<?php echo $this->Html->image('/img/photoshop.png', array('class' => 'img-responsive')); ?>
						<h2>Web and Graphic <br>Design</h2>
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
						<?php echo $this->Html->image('http://placehold.it/380x250/888888/000000', array('class' => 'img-1')); ?>
						<?php echo $this->Html->image('http://placehold.it/380x250/aaaaaa/123123', array('class' => 'img-2')); ?>
						<?php echo $this->Html->image('http://placehold.it/380x250/151515/ffffff', array('class' => 'img-3')); ?>
					</div>
				</div>
				<div class="col-md-6 text-md-center">
					<div class="scribble-bg"></div>
					<div class="text">
						<h2>Portfolio</h2>
						<p>I've categorized all of my work to make it nice and easy for you to see the projects I've created or contributed towards. <a href="#">View Full Portfolio</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-md-center">
					<h2>Holla at me..</h2>
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
				<div class="col-md-6 text-md-center">
					<?php echo $this->Form->create('Contact') ?>
						<?php echo $this->Form->input('name', array('placeholder' => 'Name', 'label' => false)) ?>
						<?php echo $this->Form->input('email', array('placeholder' => 'Email', 'label' => false)) ?>
						<?php echo $this->Form->input('message', array('type' => 'textarea', 'placeholder' => 'Message', 'label' => false)) ?>
						<?php echo $this->Form->submit('Send', array('id' => 'send')) ?>

					<?php echo $this->Form->end() ?>
					</form>
				</div>
			</div>
		</div>
	</div>