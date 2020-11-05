test:
	vendor/bin/phpunit

assets-install:
	yarn install

assets-rebuild:
	npm rebuild node-sass --force

assets-dev:
	yarn run dev

assets-production:
	yarn run production

assets-prod:
	yarn run prod

assets-watch:
	yarn run watch

perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache
	if [ -d "node_modules" ]; then sudo chown ${USER}:${USER} node_modules -R; fi
	if [ -d "public/build" ]; then sudo chown ${USER}:${USER} public/build -R; fi

unperm:
	sudo chown -R ${USER}:${USER} ./storage/docker/mysql
