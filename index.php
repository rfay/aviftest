<?php

if (function_exists('imageavif')) {
    echo "OK";
    $image = imagecreatetruecolor(250, 250);
    imageavif($image, 'test.avif');
}

