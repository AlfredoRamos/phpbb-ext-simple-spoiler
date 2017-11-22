#!/bin/bash --

set -e
set -x

EXTNAME="${1}"
EXTDEPS="${2}"

# Check if package have dependencies in the
# 'require' object, inside the composer.json file
if [[ "${EXTDEPS}" == '1' ]]; then
	cd phpBB/ext/"${EXTNAME}"
	composer install --prefer-dist --no-dev --no-interaction
	cd ../../../../
fi
