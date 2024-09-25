cli:
	docker compose exec php-cli bash

up:
	docker compose up -d

down:
	docker compose down

npm-dev:
	docker compose exec node npm run dev

npm-build:
	docker compose exec node npm run build

tinker:
	docker compose exec -u 0 php-cli php artisan tinker
