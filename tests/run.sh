#!/bin/sh

rm -rf html/*
# -v --debug
HERE=`dirname $0`
HERE=`pwd`/$HERE/
phpunit --whitelist $HERE/../ \
	--coverage-html $HERE/html/ \
	--bootstrap $HERE/src/bootstrap.php \
	--strict-coverage \
	$HERE/src
