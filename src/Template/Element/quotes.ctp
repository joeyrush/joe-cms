<div class="quotes">
	<?php foreach ($quotes as $quote): ?>
		<div class="quote">
			<blockquote><p>"<?=$quote['quote'];?>"</p></blockquote>
			<?php if (!empty($quote['author'])): ?>
				<p class="text-md-right">~ <?=$quote['author'];?></p>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>