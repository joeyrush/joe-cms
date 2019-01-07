<?php echo $this->element('meta', ['metaTitle' => $blogPost['name']]); ?>
<div class="header header-condensed animated slideInLeft">
	<div class="profile-picture text-center mb-2 sm:mb-0 sm:mr-10">
		<a href="/" aria-label="homepage">
			<img src="/img/me.png" alt="picture of me" class="rounded-full">
		</a>
	</div>
	<a class="flex flex-col justify-center sm:w-1/2 no-underline text-pink-darker pb-2" href="/" aria-label="homepage">
		<span class="text-center sm:text-left text-2xl">Joe Rushton</span>
		<span class="text-pink-dark text-grey-darker text-xs uppercase tracking-wide mt-1 text-center sm:text-left">Fullstack Web Developer</span>
	</a>
</div>

<div class="sm:w-2/3 md:w-1/2 px-8 sm:px-0 mx-auto mt-12 text-pink-darkest">
	<h1 class="text-pink-darker leading-normal mb-4 sm:mb-2 text-2xl sm:text-3xl"><?=$blogPost['name'];?></h1>
	<div class="mb-6 flex justify-between flex-col sm:flex-row">
		<span class="mb-2 sm:mb-0">
			<i class="fa fa-calendar pr-1 text-pink-dark" aria-hidden="true"></i> <?=date('dS F Y', $blogPost['created']->toUnixString());?>
		</span>
		<?php if (!empty($blogPost['reading_time'])) : ?>
			<span class="time">
				<i class="fas fa-clock pr-1 text-pink-dark" aria-hidden="true"></i> Reading Time: <strong><?=$blogPost['reading_time'];?> mins</strong>
			</span>
		<?php endif; ?>
	</div>
	<div class="my-4">
		<div>
			<span class="font-bold pr-2">Tags:</span>
			<?php foreach ($blogPost['tags'] as $tag): ?>
				<span class="bg-pink-lightest px-2 py-1 mr-1 rounded text-sm"><?=$tag['name'];?></span>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="wysiwyg text-grey-darkest leading-loose my-8">
		<?=$blogPost['body'];?>
	</div>

	<div id="disqus_thread"></div>
	<script>
	var disqus_config = function () {
	this.page.identifier = "blog_<?=$blogPost['id']?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};

	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://joerushton.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

	<div class="sm:hidden mt-2">
		<a href="/" class="uppercase font-bold no-underline"><i class="fas fa-arrow-left pr-2"></i> Back to Homepage</a>
	</div>
</div>