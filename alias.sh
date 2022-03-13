#!/usr/bin/env sh

./vendor/bin/sail up -d

cd ./resources/vuejs/apivue

npm run serve

