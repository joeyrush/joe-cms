<?php 
	$this->assign('title', 'Hobbies & Interests | Joe Rushton');
?>

<a name="top"></a>

<div class="outside-of-work-wrapper">
	<div class="container-fluid">
		<div class="outside-of-work-header">
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<div class="profile-image"></div>
				</div>
				<div class="col-md-9">
					<h1>Outside Of Work</h1>
				</div>
			</div>
			<div class="row intro-text">
				<p>Think of this page as the "Hobbies and Interests" section of a CV. Here I introduce my life outside of work, on a more personal level. After all, there is more to life than web development.. right?</p>
			</div>
		</div>
	</div>
</div>
<div class="outside-of-work-content">
	<div class="container-fluid main-menu">
		<div class="row no-gutters">
			<div class="col-xs-6 col-md-3">
				<a href="#guitar" class="smooth-scroll">
					<span class="overlay__text">Guitar</span>
					<div class="zoom">
						<div class="section__box box--1"></div>
					</div>
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#fitness" class="smooth-scroll">
					<span class="overlay__text">Fitness</span>
					<div class="zoom">
						<div class="section__box box--3"></div>
					</div>
				</a>
			</div>
			<div class="col-xs-6 col-md-3 remove-gap">
				<a href="#charity" class="smooth-scroll">
					<span class="overlay__text">Charity</span>
					<div class="zoom">
						<div class="section__box box--2"></div>
					</div>
				</a>
			</div>
			<div class="col-xs-6 col-md-3 remove-gap">
				<a href="#gaming" class="smooth-scroll">
					<span class="overlay__text">Gaming</span>
					<div class="zoom">
						<div class="section__box box--4"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<a name="guitar"></a>
	<div class="titlebar">
		<h2>Guitar / Music <i class="fa fa-music" aria-hidden="true"></i><small> - Self taught guitarrist, check out some of my clips..</small></h2>
	</div>
	<div class="container-fluid video__wrapper">
		<div class="row">
			<?php foreach($videos as $video) : ?>
				<div class="col-sm-6 col-md-3">
					<div class="video--listing">
						<a class="fancybox-media" href="https://www.youtube.com/watch?v=<?=$video['youtubeId'];?>">
							<div class="video__thumb">
								<?=$this->Image->resize('https://img.youtube.com/vi/' . $video['youtubeId']. '/0.jpg', array(
									'width' => 347,
									'height' => 290
								)); ?>

								<div class="overlay">
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</div>
							</div>
							<div class="video__title">
								<span><?=$video['title'];?></span>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<a name="fitness"></a>	
	<div class="fitness__wrapper">
		<div class="titlebar">
			<h2>Health & Fitness<small> - Bodybuilding, weight-lifting, cardio, sports</small></h2>
		</div>

		<div class="container-fluid">
			<div class="col-md-6">
				<blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(50% - 2px); width:calc(50% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/u3FbMtIs5Y/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A photo posted by Joe Rushton (@joerusho)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2014-11-01T14:36:47+00:00">Nov 1, 2014 at 7:36am PDT</time></p></div></blockquote>
							<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
			</div>
			<div class="col-md-4">
				<p>I'm big on working out, and I'm not just saying that to sound cool. Weight lifting, cardio, eating clean, 5-a-side football and making websites probably take up the majority of my life.</p>
				<p>If you need any lifting advice or want to talk about nutrition etc.. you know where to <?=$this->Html->link('contact me.', '/#mailto'); ?></p>
			</div>
		</div>
	</div>

	<a name="charity"></a>
	<div class="charity__wrapper">
		<div class="titlebar">
			<h2>Charity Work<small> - Information available on the links below.</small></h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="links">
						<a href="https://crowdfunding.justgiving.com/ebony-garbutt" target="_blank">JustGiving Page</a>
						<a href="http://joerushton.com/dl/justgiving.pdf" target="_blank">Documentation</a>
					</div>
					<div class="galleria">
						<?php
							for ($i = 1; $i < 13; $i++) {
								echo $this->Html->image('/img/charity/img' . $i . '.jpg');
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="gaming"></a>
	<div class="gaming__wrapper">
		<div class="titlebar">
			<h2>Gaming <i class="fa fa-gamepad" aria-hidden="true"></i><small> - Who doesn't like gaming?</small></h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="offset-md-4 col-md-4 text-xs-center">
					<p>Long story short I like to play games, mod games, make money off games, compete on games and sometimes even make my own games.</p>
					<p>I will use this section for posting links to any gaming related content I may have and to start off - here's a Tomb Raider game I built about 5-6 years ago when I was 14 using the "Tomb Raider Level Editor":</p><hr>
					<a href="http://trle.net/sc/levelfeatures.php?lid=2393" target="_blank">Original Post</a><br>
					<a href="http://www.trle.net/scadm/trle_dl.php?lid=2393" target="_blank">Download Link</a><br><hr>
					<a href="http://www.trle.net/screens/large/2393b.jpg" target="_blank"><?=$this->Image->resize('http://www.trle.net/screens/large/2393b.jpg', array('width' => 266, 'height' => 222)); ?></a>
				</div>

			</div>
		</div>
	</div>

	<div class="text-xs-center">
		<i>If you haven't seen it already, <?php echo $this->Html->link('here is my portfolio page.', array(
			'controller' => 'Projects',
			'action' => 'index'
		)); ?></i>
	</div>

	<div class="controls">
		<a id="up" href="#" class="smooth-scroll"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		<a id="down" href="#" class="smooth-scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	});
</script>