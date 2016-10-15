<div class="blog">	
	<div class="container">
		<div class="blog__wrapper">
			<div class="blog-head">
				<h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Blog Posts</h1>	
			</div>

			<div class="row">
				<form>
					<p class="top-text">
						Show posts between 
						<?=$this->Form->input('fromDate', array(
							'type' => 'text', 
							'templates' => array(
		        				'inputContainer' => '{{content}}'
		   					),
		   					'label' => false
		    			)) ?>
						and 
						<?=$this->Form->input('toDate', array(
							'type' => 'text', 
							'templates' => array(
		        				'inputContainer' => '{{content}}'
		   					),
		   					'label' => false
		    			)) ?>
					</p>
				</form>
			</div>

			<div class="blog__listing">
				<div class="row">
					<div class="col-md-4">
						<a href="#" class="blog__link">
							<img src="../img/charity.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<div class="blog__text">
							<a href="#"><h2>Blog Post Title</h2></a>
							<p class="date">1st October 2016</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere velit fugiat magni magnam tempora vitae. Nisi facere velit fugiat magni magnam tempora vitae...</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="#" class="blog__link">
							<img src="../img/charity.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<div class="blog__text">
							<a href="#"><h2>Blog Post Title</h2></a>
							<p class="date">1st October 2016</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere velit fugiat magni magnam tempora vitae</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="#" class="blog__link">
							<img src="../img/charity.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<div class="blog__text">
							<a href="#"><h2>Blog Post Title</h2></a>
							<p class="date">1st October 2016</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere velit fugiat magni magnam tempora vitae</p>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>