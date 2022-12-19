This is a test repo for https://github.com/drud/ddev/issues/4292, trying to get avif to work with php8.1-gd and php8.2-gd.


```bash
git clone https://github.com/rfay/aviftest
cd aviftest
ddev start
ddev launch
```

Notes:
* This PHP "not a bug" seems to describe the same thing, but here we don't get a SEGV, just a warning, https://bugs.php.net/bug.php?id=81217
* https://github.com/libgd/libgd/issues/770
* Sample example command `php -r 'var_dump(imageavif(imagecreatetruecolor(8, 8), "/tmp/test"));'` from https://bugs.php.net/bug.php?id=81217
* libavif just broken before 0.9.3? We have 0.8.4 in Debian Bullseye, https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=976349
* Discussion of custom php build, https://php.watch/versions/8.1/gd-avif
* phpwatch article: https://php.watch/versions/8.1/gd-avif
* man page: https://www.php.net/manual/en/function.imageavif.php
* Apparent stack overflow answer: https://stackoverflow.com/questions/71450871/php-8-1-avif-error-docker-no-codec-available
* How to compile php from source, https://php.watch/articles/compile-php-ubuntu
