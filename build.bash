#!/usr/bin/env bash

if [ ! -f "fincode-openapi.yml" ]; then
  wget -O fincode-openapi.yml https://docs.fincode.jp/assets/api/fincode-openapi.yml?date=${FINCODE_OPENAPI_DATE:-20241017}
  cp fincode-openapi.yml fincode-openapi.yml.org
  patch -u fincode-openapi.yml bin/fincode-openapi.0.patch
fi

npm install

rm -rf ./gen && mkdir -p ./gen

cp -r node_modules/@quartetcom/openapi-generator-php-templates/templates ./gen/templates \
  && patch -p1 -d ./gen/templates < ./bin/openapi-php-template.0.patch

docker run --rm \
  -u 1000:1000 \
  -v ./:/local \
  openapitools/openapi-generator-cli:v7.9.0 \
  generate \
    -i /local/fincode-openapi.yml \
    -g php \
    -o /local/gen \
    -t /local/gen/templates \
    --invoker-package "OpenAPI\Fincode" \
    --additional-properties=variableNamingConvention=camelCase

composer run patch;