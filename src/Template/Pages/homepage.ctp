<?php echo $this->element('meta', ['metaTitle' => 'Home - Joe Rushton']); ?>

<div class="header animated slideInDown">
	<div class="profile-picture text-center mb-4 sm:mb-0 sm:mr-10">
		<img src="/img/me.png" alt="picture of me" class="rounded-full">
	</div>
	<div class="flex flex-col justify-center sm:w-1/2">
		<h1 class="text-center sm:text-left">Joe Rushton</h1>
		<span class="text-pink-dark text-grey-darker text-sm uppercase tracking-wide mt-1 text-center sm:text-left">Fullstack Web Developer</span>
		<p class="leading-normal mt-4">
			A <a href="https://www.quora.com/What-does-the-term-full-stack-programmer-mean-What-are-the-defining-traits-of-a-full-stack-programmer" target="_blank" rel="noopener noreferrer">fullstack web developer</a>, fitness addict and guitar player. My main objective for any project is to find the <em>simplest</em> and most <em>cost-effective</em> solution to achieve the desired results. My strongest skills lie within <strong>PHP-based applications</strong> but I'm constantly learning new ways to write better code and utilize new tools - ultimately, to become <strong class="text-pink-dark">more productive</strong>.
			<br><br>
			<div class="leading-normal sm:hidden md:block bg-white p-4 px-6 rounded-lg">
				🤙<strong>My preferred stack</strong>: A <a href="https://medium.com/@benjburkholder/javascript-seo-server-side-rendering-vs-client-side-rendering-bc06b8ca2383" target="_blank" rel="noopener noreferrer">server-rendered</a> Laravel app where Vue would handle any interactive elements. On a day-to-day basis I also use Webpack, Git, jQuery, ES6, Gulp, Vuex, Vue-Router and CakePHP depending on the project. I've experience in writing well-documented REST APIs, a little TDD and a lot of in-house tool/plugin development.
			</div>
		</p>
	</div>
</div>

<div class="block md:flex md:mt-10 mx-auto md:w-full lg:w-5/6">
	<div class="card md:w-3/5 animated slideInLeft">
		<div class="card-header"><i class="fas fa-key pr-2"></i> Key Skills</div>

		<p class="leading-normal p-6 px-12">Rather than listing out all of the various languages, frameworks and tools that I've ever used, I think it makes more sense to just show you this <em>one simple graph</em> which should just about cover it:</p>

		<div class="p-4">
			<canvas id="myChart" width="400" height="400"></canvas>
		</div>

		<h4 class="p-12 pt-8 pb-0 text-lg">Additional Information</h4>
		<p class="leading-normal p-12 pt-2 pb-8 sm:pb-2">
			Other notable skills: Having a decent understanding of <span class="text-pink-darker font-bold">OOP</span> and <span class="text-pink-darker font-bold">SOLID principles</span> as well as knowledge of a wide range of <span class="text-pink-dark">refactoring techniques</span>, a keen eye for <span class="text-pink-dark">UI design</span> and a desire to <span class="text-pink-dark">automate everything</span> - be it via bash scripting, cronjobs, git hooks, CI/CD and anything else I can get my hands on.
		</p>

		<p class="leading-normal text-center px-4 py-2 md:pb-3 bg-pink-lightest mt-auto text-pink-darker text-sm">
			NB: Most commercial work isn't published here due to <a href="https://www.gov.uk/government/publications/non-disclosure-agreements" target="_blank" rel="noopener noreferrer">NDA</a> & other factors.
		</p>
	</div>

	<div class="card lg:flex-no-shrink md:w-2/5 animated slideInRight">
		<div class="card-header"><i class="fas fa-briefcase pr-2"></i> Main Projects</div>
		<a href="https://dailywebdev.co.uk" target="_blank" rel="noopener noreferrer" class="project bg-grey-lightest">
			<img src="https://dailywebdev.co.uk/img/program.svg" class="block w-1/2 mx-auto self-center" alt="key skills logo">
			<div class="flex flex-col pl-4 order-1 md:text-center lg:text-left">
				<h3 class="py-2 pt-4 md:text-md text-lg md:text-sm md:text-base">dailywebdev.co.uk</h3>
				<p class="leading-normal text-sm text-grey-darker order-1">An infinite collection of miniature dev tips, populated automatically via a nifty twitter API integration. <em>Powered by Vue/Laravel</em></p>
			</div>
		</a>
		<a href="https://carmats-uk.com" target="_blank" rel="noopener noreferrer" class="project">
			<div class="flex flex-col pl-4 md:order-1 lg:order-0 md:text-center lg:text-left">
				<h3 class="py-2 pt-4 md:text-md text-lg md:text-sm md:text-base">carmats-uk.com</h3>
				<p class="leading-normal text-sm text-grey-darker pr-2">A complex CakePHP fuelled e-commerce multi-site & CMS - developed as part of a team for a SEO-specialising web agency.</p>
			</div>
			<img src="/img/ecommerce.svg" class="block w-1/2 mx-auto self-center" alt="key skills logo">
		</a>
		<a href="https://wrestling.ly" target="_blank" rel="noopener noreferrer" class="project bg-grey-lightest">
			<img src="/img/exercise.svg" class="block w-1/2 mx-auto self-center" alt="key skills logo">
			<div class="flex flex-col pl-4 md:order-1 lg:order-0 md:text-center lg:text-left">
				<h3 class="py-2 pt-4 md:text-md text-lg md:text-sm md:text-base">wrestling.ly</h3>
				<p class="leading-normal text-sm text-grey-darker">A gamified facebook-like social media platform built for the online wrestling community. Built in vanilla PHP & jQuery (not yet launched).</p>
			</div>
		</a>
		<a href="https://uninotes.naturalornot.co.uk" target="_blank" rel="noopener noreferrer" class="project">
			<div class="flex flex-col pl-4 md:order-1 lg:order-0 md:text-center lg:text-left">
				<h3 class="py-2 pt-4 md:text-md text-lg md:text-sm md:text-base">uninotes.io</h3>
				<p class="leading-normal text-sm text-grey-darker pr-4">A feature-rich studying and note-taking web app featuring vast 3rd-party API integrations including Google Calendar, Dropbox and more.</p>
			</div>
			<img src="/img/notebook.svg" class="block w-1/2 mx-auto self-center" alt="key skills logo">
		</a>
		<a href="https://oxenmouth-news.com" target="_blank" rel="noopener noreferrer" class="project bg-grey-lightest">
			<img src="/img/news.svg" class="block w-1/2 mx-auto self-center" alt="key skills logo">
			<div class="flex flex-col pl-4 md:order-1 lg:order-0 md:text-center lg:text-left">
				<h3 class="py-2 pt-4 md:text-md text-lg md:text-sm md:text-base">oxenmouth-news.com</h3>
				<p class="leading-normal text-sm text-grey-darker">A satirical news <i class="fab fa-wordpress" aria-label="wordpress"></i> site used as an opportunity to develop our content, SEO & social media management skills.</p>
			</div>
		</a>
	</div>
</div>
<div class="flex flex-wrap w-full md:w-3/4 mx-auto mb-10">
	<div class="md:flex-1 mt-10 mx-4">
		<h2 class="text-pink-darker mb-4 text-2xl">Blog Posts</h2>

		<?php foreach ($blogPosts as $blogPost): ?>
			<?php
				$img = $this->Image->resize('/files/Images/' . $blogPost['images'][0]['filename'], array(
					'width' => 40,
					'height' => 40,
					'quality' => 100,
					'crop' => true,
					'autocrop' => true
				));

				$url = array(
					'controller' => 'BlogPosts',
					'action' => 'view',
					'slug' => $blogPost['slug']
				);
			?>
			<div class="p-2 pl-0 flex blog-list-item items-center">
				<div class="p-2">
					<?= $img; ?>
				</div>
				<div>
					<?php echo $this->Html->link($blogPost['name'], $url, array('escape' => false, 'class' => 'text-pink pr-3')); ?>
					<span class="text-sm text-grey-dark whitespace-no-wrap">
						<?=date('dS F Y', $blogPost['created']->toUnixString());?> 
					</span>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="flex-1 mt-10 mx-4">
		<h2 class="text-pink-darker mb-4 text-2xl"><i class="fas fa-chalkboard-teacher pr-3"></i>Courses I've Completed</h2>
		
		<div class="p-2 pl-0">
			<a href="https://laracasts.com/series/laravel-from-scratch-2017" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">Laravel 5.4 From Scratch</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Jeffrey Way (laracasts)</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://adamwathan.me/refactoring-to-collections/" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">Refactoring To Collections</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Adam Wathan</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://adamwathan.me/advanced-vue-component-design/" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">Advanced Vue Component Design</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Adam Wathan</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://www.youtube.com/watch?v=w5VRV4xXH40&list=PLfdtiltiRHWG4xMZm1OL_wglxkBo8v_xN" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">New in Laravel 5.5</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Codecourse</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://refactoringui.com/" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">Refactoring UI</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Steve Schoger & Adam Wathan</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://code.tutsplus.com/courses/30-days-to-learn-jquery" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">30 Days to Learn jQuery</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Jeffrey Way (tutsplus)</span>
		</div>

		<h2 class="text-pink-darker mb-4 mt-10 text-2xl"><i class="fas fa-bookmark pr-3"></i>Books I Recommend</h2>
		<div class="p-2 pl-0">
			<a href="https://en.wikipedia.org/wiki/Don%27t_Make_Me_Think" target="_blank" class="text-pink pr-3" rel="noopener noreferrer">Don't Make Me Think, Revisited</a>
			<span class="text-sm text-grey-dark whitespace-no-wrap">Steve Krug</span>
		</div>
	</div>
</div>