#!/bin/sh
for file in /usr/src/client/build/static/js/*.js;
do
  sed -i 's@STRIO_REACT_APP_API_ENTRYPOINT@'"$REACT_APP_API_ENTRYPOINT"'@g' $file;
done
echo "Starting Nginx"
nginx -g 'daemon off;'
