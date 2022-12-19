
RUN printf "deb http://deb.debian.org/debian bullseye-backports main contrib non-free\ndeb-src http://deb.debian.org/debian bullseye-backports main contrib non-free\n" >/etc/apt/sources.list.d/backports.list
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y -o Dpkg::Options::="--force-confnew" --no-install-recommends --no-install-suggests autoconf bison build-essential libc-dev libsqlite3-dev libxml++2.6-dev php-pear php${DDEV_PHP_VERSION}-dev pkg-config re2c zlib1g-dev

RUN apt-get -t bullseye-backports install -y libavif-dev libaom-dev libdav1d-dev libavif-gdk-pixbuf libzip-dev libpng-dev libjpeg-dev libwebp-dev libyuv-dev

RUN git clone https://github.com/php/php-src.git --branch=PHP-8.2 /tmp/php-src
WORKDIR /tmp/php-src
RUN ./buildconf
RUN ./configure --enable-gd --with-webp --with-jpeg --with-webp --with-avif
RUN make -j4
RUN make install
