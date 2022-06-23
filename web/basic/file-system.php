<?php

$file = __DIR__ . '/learn.txt';
print_r(pathinfo($file));

echo filesize($file);

// file_put_contents();
// file_get_contents();


/**
 * References:
 *
 * file_exists()
 * filesize() //cached clearstatcache()
 * is_file($path)
 * is_dir($path)
 * scan_dir($path)
 *
 * mkdir($path)
 * rmdir($path)
 * scan_dir($path)
 *
 *
 */
