#!/bin/bash

echo "compressing CSS"
cd css/
cat tables.css syntax.css screen.css fonts/socialico/stylesheet.css fonts/contra/stylesheet.css fonts/leaguegothic/stylesheet.css > screen.tmp.css
yui-compressor --type css screen.tmp.css > ../assets/screen-min.css
rm screen.tmp.css
cd ..
echo "compressed CSS to screen-min.css"

echo "compressing Print CSS"
cd css/
cat print.css > print.tmp.css
yui-compressor --type css print.tmp.css > ../assets/screen-min.print
rm print.tmp.css
cd ..
echo "compressed Print CSS to screen-min.print"


echo "compressing JS"
cd js/
yui-compressor --type js site.js > ../assets/site-min.js
cd ..
echo "compressed JS to site-min.css"
