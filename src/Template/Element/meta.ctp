 <?php 
 	if (empty($metaTitle)) {
 		$metaTitle = 'Joe Rushton';
 	}
 	if (empty($metaKeywords)) {
 		$metaKeywords = 'PHP; Web Development; HTML; Portfolio; Industry Standard; Composer; Dependencies; SEO';
 	}
 	if (empty($metaDescription)) {
 		$metaDescription = 'A junior PHP web developers personal portfolio showcasing his work and blogging about tools used in the modern web development industry to improve workflow, security, SEO and other aspects of being a full stack dev';
 	}

	$this->assign('title', $metaTitle);

    $this->assign('meta', $this->Html->meta(
	    'keywords',
	    $metaKeywords
	));

	$this->append('meta', $this->Html->meta(
	    'description',
	    $metaDescription
	));
?>