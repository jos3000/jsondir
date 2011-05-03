<?php

class JsonDir {

	static function dirtojson($dir){
		$output = array();

		if ($handle = opendir($dir)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					$parts = explode('.', $file);
					array_pop($parts);
					$current = &$output;
					foreach($parts AS $v){
						if(empty($current[$v])) $current[$v] = array();
						$current = &$current[$v];
					}
					$current = file_get_contents($dir.'/'.$file);
			
				}
			}
			closedir($handle);
		}
		
		return json_encode($output);
	}
}