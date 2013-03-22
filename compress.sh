#!/bin/bash

echo "compressing CSS"
cd css/
rm screen-min.css
cat *.css > screen.tmp.css
yui-compressor --type css screen.tmp.css > screen-min.css
rm screen.tmp.css
cd ..
echo "compressed CSS to screen-min.css"

echo "compressing JS"
cd js/
rm site-min.js
cat *.js > site.tmp.js
yui-compressor --type js site.tmp.js > site-min.js
rm site.tmp.js
cd ..
echo "compressed JS to site-min.css"
