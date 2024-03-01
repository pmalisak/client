PHP_CONTAINER = docker compose exec --user 1000 php

# commands from project dir

build:
	@docker compose build --no-cache

rebuild:
	@docker compose build --pull --no-cache

run:
	@docker compose up -d

stop:
	@docker compose down --remove-orphans

logs:
	@docker compose logs -f

shell:
	@$(PHP_CONTAINER) sh
