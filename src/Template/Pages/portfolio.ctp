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
							<?php echo $this->Form->input('portfolioCategories', array('label' => false, 'type' => 'select', 'options' => ['select a category'])); ?>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<div class="items-wrapper">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<?php echo $this->Image->resize('img/portfolio/item01.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<div class="half">
							<!-- <img class="portfolio-item" id="item2" src="http://placehold.it/540x280"> -->
							<?php echo $this->Image->resize('img/portfolio/item02.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item03.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item04.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item05.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item06.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item07.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="item-wrapper">
						<?php echo $this->Image->resize('img/portfolio/item08.jpg', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<?php echo $this->Image->resize('img/portfolio/item06.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<?php echo $this->Image->resize('img/portfolio/item06.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<?php echo $this->Image->resize('img/portfolio/item06.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="item-wrapper">
						<?php echo $this->Image->resize('img/portfolio/item08.jpg', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item06.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
					<div class="item-wrapper">
						<div class="half">
							<?php echo $this->Image->resize('img/portfolio/item07.png', array(
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
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>