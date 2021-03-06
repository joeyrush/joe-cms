<?php
namespace App\View\Helper;

use Cake\View\Helper;
use App\Lib\Image;

class ImageHelper extends Helper {

	public $helpers = array('Html');

/**
 * Automatically resizes and/or crops an image and returns formatted IMG tag or URL
 *
 * @param string $path Path to the image file
 * @param array $options
 *
 * @return mixed Image tag or URL of the resized/cropped image
 *
 * @access public
 */
	public function resize($path, $options = array()) {
		$options = array_merge(array(
			'width'				=> null,	//Width of the new Image, Default is Original Width
			'height'			=> null,	//Height of the new Image, Default is Original Height
			'aspect'			=> true,	//Keep aspect ratio
			'crop'				=> false,	//Crop the Image
			'cropvars'			=> array(), //How to crop the image, array($startx, $starty, $endx, $endy);
			'autocrop'			=> false,	//Auto crop the image, calculate the crop according to the size and crop from the middle
			'htmlAttributes'	=> array(),	//Html attributes for the image tag
			'quality'			=> 90,		//Quality of the image
			'urlOnly'			=> false	//Return only the URL or return the Image tag
		), $options);

		foreach ($options as $key => $option) {
			${$key} = $option;
		}

		// if the path contains http or www. - assume its an external image, download it and then pass in the local path into the resize method
		if (strpos($path, 'http') !== false || strpos($path, 'www.') !== false) {
			// strip protocol
			$newPath = preg_replace('/^https?:\/\//', '', $path);
			// replace slashes with dashes
			$newPath = str_replace('/', '-', $newPath);
			// replace all but last dot (extension) with slash
			$newPath = preg_replace('/\.(?=.*\.)/', '-', $newPath);

			$newPath = 'img/cache/' . $newPath;

			// if we don't already have an image from this url, download it
			if (!file_exists($newPath)) {
				file_put_contents($newPath, fopen($path, 'r'));
			}

			$path = $newPath;
		}

		$relFile = Image::resize($path, $options);

		//Return only the URL
		if ($options['urlOnly']) {
			return $relFile;
		}

		return $this->Html->image($relFile,$options['htmlAttributes']);
	}
}
