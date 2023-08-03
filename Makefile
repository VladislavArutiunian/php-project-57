PORT ?= 8080
start:
	php -S 0.0.0.0:$(PORT) -t public

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app/ database/ routes/ tests/

test:
	vendor/bin/phpunit tests/

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app/ database/ routes/ tests/

start-locally:
	php -S localhost:8082 -t public public/index.php

migrate:
	php artisan migrate

seed-db:
	php artisan db:seed

