<?php

if (function_exists('imageavif')) {
    echo "imageavif function exists, trying to create and alter images";

    $image = imagecreatefromjpeg('image.jpg');

    $cropped_image = imagecrop($image, ['x' => 0, 'y' => 0, 'width' => 50, 'height' => 50]);

    imagewebp($cropped_image, 'cropped.jpg');
    imageavif($cropped_image, 'cropped.avif');

    echo "here are the images";
    echo "<img src=cropped.jpg> <img src=cropped.avif>";

}

