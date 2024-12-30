#!/bin/bash
composer install -n
php bin/console doc:mig:mig --no-interaction
php bin/console doc:fix:load --no-interaction
php bin/console server:start 0.0.0.0:8000
exec "$@"
