.PHONY: help ps build build-prod start fresh fresh-prod stop restart destroy \
	cache cache-clear migrate migrate migrate-fresh tests tests-html

CONTAINER_DATABASE=pgsql

help: ## Print help.
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n\nTargets:\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-10s\033[0m %s\n", $$1, $$2 }' $(MAKEFILE_LIST)


start: ## Start all containers
	@docker compose up --force-recreate -d

fresh:  ## Destroy & recreate all using dev containers.
	make stop
	make destroy
	make build
	make start

stop: ## Stop all containers
	@docker compose stop

down: ## Remove all containers
	@docker compose down

restart: stop start ## Restart all containers

destroy: down ## Destroy all containers

npm-i: ## Install npm dependents
	@npm install

npm-b: ## Build front
	@npm run build

dev: ## Frontend dev
	@npm run dev

install: ## Run composer install
	@composer install

migrate: ## Run migration files
	@php artisan migrate

migrate-fresh: ## Clear database and run all migrations
	@php artisan migrate:fresh

seed-fresh: ## Refresh Database fake data
	@php artisan migrate:fresh --seed

tests: ## Run all tests
	@php artisan test

am: ## Make something with artisan - make am c="model"
	@php artisan make:$(c)

amc: ## Make controller with artisan
	@php artisan make:controller

amcr: ## Make controller as resource with artisan
	@php artisan make:controller -r --model=$(c)

amm: ## Make model with artisan
	@php artisan make:model

amma: ## Make model with artisan
	@php artisan make:model --all

ammg: ## Make migration with artisan
	@php artisan make:migration

amrs: ## Make resource with artisan
	@php artisan make:resource

amrq: ## Make request with artisan
	@php artisan make:request
