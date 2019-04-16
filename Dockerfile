FROM php:7.2-fpm-alpine

ENV APP_HOME /usr/src/canie
ENV APP_PROJETO "canie"


# Download and install NodeJS
# ADD install-node.sh /usr/sbin/install-node.sh
# RUN /usr/sbin/install-node.sh


# Use the default production configuration
# RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Override with custom opcache settings
# COPY config/opcache.ini $PHP_INI_DIR/conf.d/

COPY . $APP_HOME
WORKDIR $APP_HOME

EXPOSE 8000
CMD [ "php", "artisan", "serve" ]

# HEALTHCHECK --interval=DURATION CMD curl -f http://localhost/ || exit 1