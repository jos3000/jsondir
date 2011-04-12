<?php

$dir = $argv[1];

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

echo 'var '.basename($dir).' = ';
echo json_encode($output);
echo ";\n";