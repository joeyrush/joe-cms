<nav class="navbar navbar-static-top">
	<div class="zigzag"></div>
	<a class="navbar-brand" href="<?=$this->Url->build('/');?>"><i class="fa fa-home <?=($page == 'homepage') ? 'home-active' : ''?>" aria-hidden="true"></i></a>
	<ul class="nav navbar-nav">
		<?php foreach ($pages as $menu): ?>
		<li class="nav-item">
			<?php 
				$class = $menu['active'] ? 'active ' : 'sliding-middle-out ';
				$class .= 'nav-link';
				echo $this->Html->link($menu['name'], $menu['url'], array('class' => $class)); 
			?>
		</li>
		<?php endforeach; ?>	
		<div class="pull-right">
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
			</li>
		</div>
	</ul>
</nav>

<nav class="navbar navbar-fixed-top hidden">
	<div class="zigzag"></div>
	<div class="nav-contents">
		<a class="navbar-brand" href="<?=$this->Url->build('/');?>"><i class="fa fa-home <?=($page == 'homepage') ? 'home-active' : ''?>" aria-hidden="true"></i></a>
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
			<div class="pull-right">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				</li>
			</div>
		</ul>
	</div>
</nav>