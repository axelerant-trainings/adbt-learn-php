<?php

// php ./path/to/cli.php -v 9.0
// Get input from user on CLI.
$app = readline("Favorite mobile app: ");

// Single colon is for required arguments.
// Double colon is for optional arguments.
$arguments = getopt('v:');
$version = isset($arguments['v']) ? $arguments['v'] : 'Unknown version';

echo "Hey! Your favourite app is $app - ($version).\n\n";

// var_dump($arguments);

