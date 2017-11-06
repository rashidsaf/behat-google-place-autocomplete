#!/usr/bin/env bash

export NODE_HOST=registry.hub.docker.com
export NODE_ACCOUNT=chekote
export NODE_REPO=node
export NODE_TAG=9.0.0
export NODE_IMAGE=${NODE_HOST}/${NODE_ACCOUNT}/${NODE_REPO}:${NODE_TAG}

export PHP_HOST=registry.hub.docker.com
export PHP_ACCOUNT=chekote
export PHP_REPO=php
export PHP_TAG=7.1.10-behat
export PHP_IMAGE=${PHP_HOST}/${PHP_ACCOUNT}/${PHP_REPO}:${PHP_TAG}
