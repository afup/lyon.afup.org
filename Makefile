# Colors
COLOR_RESET = \033[0m
COLOR_TARGET = \033[32m
COLOR_TITLE = \033[33m
TEXT_BOLD = \033[1m

.DEFAULT_GOAL = help
.SILENT: help
help:
	printf "\n${COLOR_TITLE}Usage:${COLOR_RESET}\n"
	printf "  ${COLOR_TARGET}make${COLOR_RESET} [target]\n"
	printf "\n"
	awk '/^[\w\.@%-]+:/i { \
		helpMessage = match(lastLine, /^### (.*)/); \
		if (helpMessage) { \
			helpCommand = substr($$1, 0, index($$1, ":") - 1); \
			helpMessage = substr(lastLine, RSTART + 3, RLENGTH); \
			printf "  ${COLOR_TARGET}%-30s${COLOR_RESET} %s\n", helpCommand, helpMessage; \
		} \
	} \
	/^##@.+/ { \
		printf "\n${TEXT_BOLD}${COLOR_TITLE}%s${COLOR_RESET}\n", substr($$0, 5); \
	} \
	{ lastLine = $$0 }' $(MAKEFILE_LIST)

##@ Setup

### Install dependencies
install:
	composer install
	npm install
	make public/webfonts

##@ Local development

### Start the dev server and watch for changes
watch:
	npm run watch

### Automatically recompile CSS
css:
	npx tailwindcss -i ./resources/css/app.css -o ./public/app.css --watch

### Start a local development server
serve: public/webfonts logos
	php -S localhost:8000 -t public

##@ Building

.PHONY: build
### Build the website
build: logos
	# Clean build directory
	rm -rf build

	# Create directories
	mkdir -p build
	mkdir -p build/webfonts
	mkdir -p build/img

	# Copy needed files
	cp -r node_modules/@fortawesome/fontawesome-free/webfonts/* build/webfonts
	cp -r public/img/* build/img
	cp config/CNAME build/CNAME

	# Compile CSS
	npx tailwindcss -i ./resources/css/app.css -o ./build/app.css --minify

	# Generate pages
	php bin/build.php index > build/index.html
	php bin/build.php 404 > build/404.html

## Hidden targets

public/webfonts:
	mkdir -p public/webfonts
	cp -r node_modules/@fortawesome/fontawesome-free/webfonts/* public/webfonts

public/img/logo_simple.png:
	cp config/logo_simple.png public/img/logo_simple.png

public/img/logo_text.png:
	cp config/logo_text.png public/img/logo_text.png

logos: public/img/logo_simple.png public/img/logo_text.png
