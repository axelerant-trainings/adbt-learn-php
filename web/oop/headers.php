<?php
// No output/response should be returned before calling header() function.
sleep(5);
header('Location: /oop/');

echo "Hello!";
