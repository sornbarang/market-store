<?php
namespace App\Support;

class SluggableSupportKhmer {

	static function slug($string, $separator){
	        $slug = mb_strtolower(
	            preg_replace('/([?]|\p{P}|\s)+/u', $separator, $string)
	        );
	        return trim($slug, $separator);
	}

}