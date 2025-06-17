@echo off
echo Copying assets to public/libs...

mkdir public\libs\bootstrap\css
mkdir public\libs\bootstrap\js
mkdir public\libs\bootstrap-icons\font
mkdir public\libs\htmx

copy node_modules\bootstrap\dist\css\bootstrap.min.css public\libs\bootstrap\css\
copy node_modules\bootstrap\dist\js\bootstrap.bundle.min.js public\libs\bootstrap\js\
copy node_modules\bootstrap-icons\font\bootstrap-icons.css public\libs\bootstrap-icons\font\
xcopy /E /I /Y node_modules\bootstrap-icons\font\fonts public\libs\bootstrap-icons\font\fonts\
copy node_modules\htmx.org\dist\htmx.min.js public\libs\htmx\

echo Assets copied successfully.
