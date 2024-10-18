#!/usr/bin/env bash

if [ ! -f "fincode-openapi.yml" ]; then
  wget -O fincode-openapi.yml https://docs.fincode.jp/assets/api/fincode-openapi.yml?date=${FINCODE_OPENAPI_DATE:-20241017}
  cp fincode-openapi.yml fincode-openapi.yml.org
  patch -u fincode-openapi.yml bin/fincode-openapi.0.patch
fi

docker run --rm \
  -u 1000:1000 \
  -v ./:/local \
  openapitools/openapi-generator-cli:v7.9.0 \
  generate \
    -i /local/fincode-openapi.yml \
    --generate-alias-as-model \
    --openapi-normalizer REFACTOR_ALLOF_WITH_PROPERTIES_ONLY=true \
    -g php \
    -o /local/src \
    -t /local/node_modules/@quartetcom/openapi-generator-php-templates/templates \
    --invoker-package "OpenAPI\Fincode"