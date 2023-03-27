# set all to phony
SHELL=bash

.PHONY: *

DOCKER_CGROUP:=$(shell cat /proc/1/cgroup | grep docker | wc -l)
COMPOSER_CACHE_DIR=$(shell composer config --global cache-dir -q || echo ${HOME}/.composer/cache)

ifneq ("$(wildcard /.dockerenv)","")
    IN_DOCKER=TRUE
else ifneq ("$(DOCKER_CGROUP)","0")
	IN_DOCKER=TRUE
else
    IN_DOCKER=FALSE
endif

ifeq ("$(IN_DOCKER)","TRUE")
	DOCKER_RUN=
else
	DOCKER_RUN=docker run --rm -i \
		-v "`pwd`:`pwd`" \
		-v "${COMPOSER_CACHE_DIR}:/home/app/.composer/cache" \
		-w "`pwd`" \
		 --env SUBSPLIT_GITHUB_TOKEN=$$SUBSPLIT_GITHUB_TOKEN \
		"wyrihaximusnet/php:8.2-nts-alpine-slim-dev"
endif

set-up-clients:
	$(DOCKER_RUN) php utils/client-skelleton-setup.php

generate-clients: set-up-clients
	$(DOCKER_RUN) ls ./subSplits | xargs -I % $(DOCKER_RUN) php ./vendor/bin/openapi-client-generator ./subSplits/%/etc/openapi-generator-config.yaml
	$(DOCKER_RUN) ls ./subSplits | xargs -I % $(DOCKER_RUN) composer install --working-dir=./subSplits/% -o --no-progress --no-ansi
