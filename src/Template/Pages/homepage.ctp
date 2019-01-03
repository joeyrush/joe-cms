<?php echo $this->element('meta', ['metaTitle' => 'Home - Joe Rushton']); ?>

<div class="heading">
	<div class="profile-picture text-center mr-10">
		<img src="/img/me.png" alt="picture of me" class="rounded-full">
	</div>
	<div class="flex flex-col justify-center w-1/2">
		<h1>Joe Rushton</h1>
		<span class="text-purple-dark text-grey-darker text-sm uppercase tracking-wide mt-1">Fullstack Web Developer</span>
		<p class="leading-normal mt-4">
			A <a href="https://www.quora.com/What-does-the-term-full-stack-programmer-mean-What-are-the-defining-traits-of-a-full-stack-programmer" target="_blank" rel="noopener noreferrer">fullstack web developer</a>, fitness addict and guitar player. My main objective for any project is to find the <em>simplest</em> and most <em>cost-effective</em> solution to achieve the desired results. My strongest skills lie within <strong>PHP-based applications</strong> but I'm constantly learning new ways to write better code and utilize new tools - ultimately, to become <strong>more productive</strong>.
			<br><br>
			<strong>My ideal stack</strong> would be a classic server-rendered Laravel application with sprinkles of Vue throughout. On a day-to-day basis I also use Webpack, Git, jQuery, ES6, Gulp, Vuex, Vue-Router and CakePHP depending on the project. I've experience in writing well-documented REST APIs, a little TDD and a lot of in-house tool/plugin development.</p>
	</div>
</div>

<div class="flex flex-wrap w-full md:w-3/4 mx-auto mb-10 md:mt-10">
	<div class="card">
		<div class="card-header">Key Skills</div>

		<p class="leading-normal p-6">I could spend all day listing out the various languages, frameworks and tools that I've ever used.. or I could just show you what you need to know in <em>one simple graph</em>:</p>

		<div class="p-4">
			<canvas id="myChart" width="400" height="400"></canvas>
		</div>

		<h4 class="p-6 pb-0">Anything else to add, Joe?</h4>
		<p class="leading-normal p-6 pt-2">
			Some of the other <em>not-so-obvious</em> - but still worthy of a mention, "skills" include: <span class="text-purple-dark">bash scripting</span>, deep understanding of <span class="text-blue">OOP</span> and <span class="text-blue">SOLID principles</span> as well as knowledge of a wide range of <span class="text-pink-dark">refactoring techniques</span>, a keen eye for UI design and a desire to <u>automate <strong>EVERYTHING</strong></u>.
		</p>
	</div>

	<div class="card">
		<div class="card-header">My Featured Work</div>
		<a href="https://dailywebdev.co.uk" target="_blank" rel="noopener noreferrer" class="flex p-6 bg-grey-lightest no-underline">
			<img src="https://dailywebdev.co.uk/img/program.svg" class="block w-1/2 self-center" alt="key skills logo">
			<div class="flex flex-col pl-4">
				<h3 class="py-2 md:text-md text-sm md:text-base">dailywebdev.co.uk</h3>
				<p class="leading-normal text-sm text-grey-darker">An infinite collection of miniature dev tips, populated automatically via a nifty twitter API integration. <em>Powered by Vue/Laravel</em></p>
			</div>
		</a>
		<a href="https://carmats-uk.com" target="_blank" rel="noopener noreferrer" class="flex p-6 no-underline">
			<div class="flex flex-col pl-4">
				<h3 class="py-2 md:text-md text-sm md:text-base">carmats-uk.com</h3>
				<p class="leading-normal text-sm text-grey-darker pr-2">A complex CakePHP fuelled e-commerce multi-site & CMS - developed as part of a team for a SEO-specialising web agency.</p>
			</div>
			<img src="/img/ecommerce.svg" class="block w-1/2 self-center" alt="key skills logo">
		</a>
		<a href="https://naturalornot.co.uk" target="_blank" rel="noopener noreferrer" class="flex p-6 bg-grey-lightest no-underline">
			<img src="/img/exercise.svg" class="block w-1/2 self-center" alt="key skills logo">
			<div class="flex flex-col pl-4">
				<h3 class="py-2 md:text-md text-sm md:text-base">naturalornot.co.uk</h3>
				<p class="leading-normal text-sm text-grey-darker">A cheeky little interactive side-project built with ❤️ in Vue.</p>
			</div>
		</a>
		<a href="https://uninotes.naturalornot.co.uk" target="_blank" rel="noopener noreferrer" class="flex p-6 no-underline">
			<div class="flex flex-col pl-4">
				<h3 class="py-2 md:text-md text-sm md:text-base">uninotes.io</h3>
				<p class="leading-normal text-sm text-grey-darker pr-4">A feature-rich studying and note-taking web app featuring vast 3rd-party API integrations including Google Calendar, Dropbox and more.</p>
			</div>
			<div>
				<img src="/img/notebook.svg" class="block self-center" alt="key skills logo">
			</div>
		</a>
	</div>

	<div class="md:flex-1 mt-10 mx-4">
		<h2 class="text-purple-darker mb-4 text-2xl">Blog Posts</h2>
		
		<div class="p-2 pl-0">
			<a href="#" class="text-purple">How to conquer the world in PHP</a>
			<span class="text-sm text-grey-dark pl-4">August 7, 2018</span>
		</div>
		
		<div class="p-2 pl-0">
			<a href="#" class="text-purple">PHP - Should you ignore notices and warnings that don't break anything</a>
			<span class="text-sm text-grey-dark pl-4">August 7, 2018</span>
		</div>
	</div>

	<div class="flex-1 mt-10 mx-4">
		<h2 class="text-purple-darker mb-4 text-2xl">Courses I've Completed</h2>
		
		<div class="p-2 pl-0">
			<a href="https://laracasts.com/series/laravel-from-scratch-2017" target="_blank" class="text-purple" rel="noopener noreferrer">Laravel 5.4 From Scratch</a>
			<span class="text-sm text-grey-dark pl-4">Jeffrey Way (laracasts)</span>
		</div>

		<div class="p-2 pl-0">
			<a href="#" target="_blank" class="text-purple" rel="noopener noreferrer">Refactoring To Collections</a>
			<span class="text-sm text-grey-dark pl-4">Adam Wathan</span>
		</div>

		<div class="p-2 pl-0">
			<a href="#" target="_blank" class="text-purple" rel="noopener noreferrer">Advanced Vue Component Design</a>
			<span class="text-sm text-grey-dark pl-4">Adam Wathan</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://www.youtube.com/watch?v=w5VRV4xXH40&list=PLfdtiltiRHWG4xMZm1OL_wglxkBo8v_xN" target="_blank" class="text-purple" rel="noopener noreferrer">New in Laravel 5.5</a>
			<span class="text-sm text-grey-dark pl-4">Codecourse</span>
		</div>

		<div class="p-2 pl-0">
			<a href="#" target="_blank" class="text-purple" rel="noopener noreferrer">Refactoring UI</a>
			<span class="text-sm text-grey-dark pl-4">Steve Schoger & Adam Wathan</span>
		</div>

		<div class="p-2 pl-0">
			<a href="https://code.tutsplus.com/courses/30-days-to-learn-jquery" target="_blank" class="text-purple" rel="noopener noreferrer">30 Days to Learn jQuery</a>
			<span class="text-sm text-grey-dark pl-4">Jeffrey Way (tutsplus)</span>
		</div>
	</div>

	<div class="w-full mt-10 text-center">
		<hr class="border-t-2 border-grey-lightest mb-4 w-1/3">
		<h4 class="mb-4 text-purple-darker">Find me on social media</h4>
		<a href="#" target="_blank" rel="noopener noreferrer" class="p-4 text-3xl no-underline text-purple-dark hover:text-purple">
			<i class="fab fa-twitter"></i>
		</a>
		<a href="#" target="_blank" rel="noopener noreferrer" class="p-4 text-3xl no-underline text-purple-dark hover:text-purple">
			<i class="fab fa-linkedin-in"></i>
		</a>
	</div>
</div>