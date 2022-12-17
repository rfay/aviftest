
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y -o Dpkg::Options::="--force-confnew" --no-install-recommends --no-install-suggests autoconf bison build-essential libaom-dev libavif-dev libdav1d-dev libavif-gdk-pixbuf libc-dev libsqlite3-dev libpng-dev libxml++2.6-dev php-pear php${DDEV_PHP_VERSION}-dev pkg-config re2c zlib1g-dev

RUN git clone https://github.com/php/php-src.git --branch=PHP-8.2 /tmp/php-src
WORKDIR /tmp/php-src
RUN ./buildconf
RUN ./configure --enable-gd --with-avif
RUN make -j4
RUN make install
