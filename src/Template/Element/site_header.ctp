<?php $home = $this->Url->build('/'); ?>
<div id="loading">
	<div id="loading-center">
		<div id="loading-center-absolute">
			<div class="text-xs-center"><h1>Loading, please wait..</h1></div>
			<div id="object"></div>
		</div>
	</div>
</div>

<!-- <nav class="navbar navbar-static-top">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-caret-down" aria-hidden="true"></i> Explore</button>
	<div class="zigzag hidden-md-down"></div>
	<div class="collapse navbar-toggleable-md" id="navbarResponsive">
		<a class="navbar-brand hidden-md-down" href="<?=$home;?>"><i class="fa fa-home <?=($home == $this->request->here) ? 'home-active' : ''?>" aria-hidden="true"></i></a>
		<ul class="nav navbar-nav">
			<li class="nav-item hidden-lg-up">
				<a href="<?=$this->Url->build('/');?>" class="<?=($home == $this->request->here) ? 'active' : 'sliding-middle-out'?> nav-link">HOME</a>
			</li>
			<?php foreach ($pages as $menu): ?>
			<li class="nav-item">
				<?php
					$class = $menu['active'] ? 'active ' : 'sliding-middle-out ';
					$class .= 'nav-link';
					$url = array(
						'controller' => $menu['controller'],
						'action' => $menu['action']
					);
					if (!empty($menu['pass'])) {
						$url[] = $menu['pass'];
					}
					echo $this->Html->link($menu['name'], $url, array('class' => $class));
				?>
			</li>
			<?php endforeach; ?>
		</ul>
		<div class="nav-icons pull-lg-right">
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" target="_blank" href="https://github.com/joeyrush"><i class="fa fa-github-square" aria-hidden="true"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" target="_blank" href="https://www.linkedin.com/in/joseph-rushton-530aba111"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<nav class="navbar navbar-fixed-top hidden">
	<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive2" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-caret-down" aria-hidden="true"></i> Explore</button>
	<div class="zigzag"></div>
	<div class="collapse navbar-toggleable-md" id="navbarResponsive2">
		<div class="nav-contents">
			<a class="navbar-brand hidden-md-down" href="<?=$home;?>"><i class="fa fa-home <?=($home == $this->request->here) ? 'home-active' : ''?>" aria-hidden="true"></i></a>
			<ul class="nav navbar-nav">
				<li class="nav-item hidden-lg-up">
					<a href="<?=$home;?>" class="<?=($home == $this->request->here) ? 'active' : 'sliding-middle-out'?> nav-link">HOME</a>
				</li>
				<?php foreach ($pages as $menu): ?>
				<li class="nav-item">
					<?php
						$class = $menu['active'] ? 'active ' : 'sliding-middle-out ';
						$class .= 'nav-link';
						$url = array(
							'controller' => $menu['controller'],
							'action' => $menu['action']
						);
						if (!empty($menu['pass'])) {
							$url[] = $menu['pass'];
						}
						echo $this->Html->link($menu['name'], $url, array('class' => $class));
					?>
				</li>
				<?php endforeach; ?>
				<div class="nav-icons pull-lg-right text-sm-center">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" target="_blank" href="https://github.com/joeyrush"><i class="fa fa-github-square" aria-hidden="true"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" target="_blank" href="https://www.linkedin.com/in/joseph-rushton-530aba111"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</ul>
		</div>
	</div>
</nav>
 -->