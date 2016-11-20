<div class="blog blog__detail">	
	<div class="container">
		<div class="blog__wrapper">
			<div class="blog-head">
				<h1><i class="fa fa-diamond" aria-hidden="true"></i> Joes Programming Blog</h1>	
			</div>

			<div class="blog__content">
				<h2>Blog Post Title</h2>
				<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20th November 2016</span>
				<div class="tags__wrapper">
					<h5>Tags: <span class="tag">CakePHP</span> <span class="tag">Programming</span></h5>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quidem eum ducimus suscipit tempore, explicabo, adipisci fugiat a quibusdam itaque eveniet vitae soluta minima illo sint non, cumque dicta magnam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eos nulla dolorem eveniet laborum facere. Ratione similique, laborum explicabo aperiam? Cum expedita porro modi maiores, voluptate voluptas amet fugit? Illum.<p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem est voluptates repellat minus itaque nisi veniam velit magnam sunt aspernatur, quibusdam nesciunt, nihil ad quos reiciendis, atque voluptas eos ratione.</p>
<pre>
<code>public function foo() {
	echo 'foo';
}
</code></pre>
				<p>This is inline code: <code>BlogPostsController.php</code></p>
			</div>
			<div class="blog-foot">
				<?php 
					echo $this->Html->link('<i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to listing', array(
						'controller' => 'BlogPosts',
						'action' => 'index'
					), array(
						'escape' => false
					)); 
				?>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		hljs.initHighlightingOnLoad();
	})
</script>