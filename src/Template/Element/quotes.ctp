<div class="quotes">
	<?php foreach ($quotes as $quote): ?>
		<div class="quote">
			<blockquote><p>"<?=$quote['quote'];?>"</p></blockquote>
			<p class="text-md-right">~ <?=$quote['author'];?></p>
		</div>
	<?php endforeach; ?>
</div>