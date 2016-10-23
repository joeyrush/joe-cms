<nav class="navbar navbar-static-top">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> View Menu</button>
	<div class="zigzag hidden-md-down"></div>
	<div class="collapse navbar-toggleable-md" id="navbarResponsive">
		<a class="navbar-brand hidden-md-down" href="<?=$this->Url->build('/');?>"><i class="fa fa-home <?=($page == 'homepage') ? 'home-active' : ''?>" aria-hidden="true"></i></a>
		<ul class="nav navbar-nav">
			<li class="nav-item hidden-lg-up">
				<a href="<?=$this->Url->build('/');?>" class="<?=($page == 'homepage') ? 'active' : 'sliding-middle-out'?> nav-link">HOME</a>
			</li>
			<?php foreach ($pages as $menu): ?>
			<li class="nav-item">
				<?php 
					$class = $menu['active'] ? 'active ' : 'sliding-middle-out ';
					$class .= 'nav-link';
					echo $this->Html->link($menu['name'], $menu['url'], array('class' => $class)); 
				?>
			</li>
			<?php endforeach; ?>	
		</ul>
		<div class="nav-icons pull-lg-right">
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<nav class="navbar navbar-fixed-top hidden">
	<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive2" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> View Menu</button>
	<div class="zigzag"></div>
	<div class="collapse navbar-toggleable-md" id="navbarResponsive2">
		<div class="nav-contents">
			<a class="navbar-brand hidden-md-down" href="<?=$this->Url->build('/');?>"><i class="fa fa-home <?=($page == 'homepage') ? 'home-active' : ''?>" aria-hidden="true"></i></a>
			<ul class="nav navbar-nav">
				<?php foreach ($pages as $menu): ?>
				<li class="nav-item">
					<?php 
						$class = $menu['active'] ? 'active ' : 'sliding-middle-out-2 ';
						$class .= 'nav-link';
						echo $this->Html->link($menu['name'], $menu['url'], array('class' => $class)); 
					?>
				</li>
				<?php endforeach; ?>	
				<div class="nav-icons pull-lg-right text-sm-center">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</ul>
		</div>
	</div>
</nav>