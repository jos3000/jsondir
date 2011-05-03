<?php

$dir = $argv[1];

require_once(dirname(__FILE__).'/jsondirlib.php');

echo 'var '.basename($dir).' = ';
echo JsonDir::dirtojson($dir);
echo ";\n";