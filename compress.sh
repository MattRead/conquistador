#!/bin/bash

echo "compressing CSS"
cd css/
cat *.css fonts/*/stylesheet.css > screen.tmp.css
yui-compressor --type css screen.tmp.css > ../assets/screen-min.css
rm screen.tmp.css
cd ..
echo "compressed CSS to screen-min.css"

echo "compressing JS"
cd js/
cat site.js > site.tmp.js
yui-compressor --type js site.tmp.js > ../assets/site-min.js
rm site.tmp.js
cd ..
echo "compressed JS to site-min.css"
