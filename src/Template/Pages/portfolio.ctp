<div class="portfolio-wrapper">
	<div class="container-fluid">
		<div class="portfolio-header">
			<hr>
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<div class="profile-image"></div>
				</div>
				<div class="col-md-9">
					<h1>Full Portfolio</h1>
					<p class="pull-left">
						Filter By:&emsp;
						<?php echo $this->Form->input('portfolioCategories', array('label' => false, 'type' => 'select', 'options' => ['select a category'])); ?>
					</p>
				</div>
			</div>
			<hr>
		</div>
		<div class="items-wrapper">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="item-wrapper">
						<img class="portfolio-item" id="item1" src="../img/portfolio/item05.png">
						<div class="portfolio__overlay text-xs-center">
							<div>
								<h3>Wavelength Music</h3>
								<p>An e-commerce website for a local individual music shop as part of a university project</p>
								<a href="#">Find Out More</a> |
								<a href="#">Visit Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="half">
						<img class="portfolio-item" id="item2" src="../img/portfolio/item02.png">
					</div>
					<div class="half">
						<img class="portfolio-item" id="item3" src="../img/portfolio/item03.png">
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="half">
						<img class="portfolio-item" id="item4" src="../img/portfolio/item04.png">
					</div>
					<div class="half">
						<img class="portfolio-item" id="item5" src="../img/portfolio/item08.jpg">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="half">
						<img class="portfolio-item" id="item6" src="../img/portfolio/item06.png">
					</div>
					<div class="half">
						<img class="portfolio-item" id="item7" src="../img/portfolio/item07.png">
					</div>
				</div>
				<div class="col-md-8 col-sm-6">
					<img class="portfolio-item" id="item8" src="../img/portfolio/item01.png">
				</div>
			</div>
		</div>
	</div>
</div>