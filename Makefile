.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-examen .

build-container:
	docker run -dt --name docker-examen -v .:/ainhoa/ExamenParcial docker-examen
	docker exec docker-examen composer install

start:
	docker start docker-examen

test: start
	docker exec docker-examen ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-examen /bin/bash

stop:
	docker stop docker-examen

clean: stop
	docker rm docker-examen
	rm -rf vendor
