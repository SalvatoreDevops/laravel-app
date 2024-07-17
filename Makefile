include src/.env
# set default shell
SHELL = bash -e -o pipefail
# Variables
#VERSION                  ?= $(shell cat ./Version)
DATE                     ?= $(date +"%d-%m-%Y")

.PHONY: build

default: help

help:
	@echo "Usage: make [<target>]"
	@echo "where available targets are:"
	@echo "build                  : Build all docker images"
	@echo "start                  : Start Applications"
	@echo "stop                   : Stop Applications"

build:
	docker-compose build

start:
	docker-compose up -d

stop:
	docker-compose down --remove-orphans