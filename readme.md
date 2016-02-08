Synopsis
==========

Sketch is used to create a local development environment for Lightspeed (formerly knows as SEOshop) themes. 
Lightspeed uses the ".rain" language as a template engine, which is almost identical to the better known language "Twig". 

Requirements
==========

- Composer
- PHPserver
- Node.js
- Gulp

Installation
==========

- Download package
- run `composer install` in terminal
- run `npm install --save-dev` in terminal
- change config.php to connect a Lightspeed shop
- change gulpfile.js line 11 `proxy: localhost:80/sketch` to the base url
- run `gulp` in terminal

To use browsersync: open url in browser with portnumber 3001 ( e.g. localhost:3001/sketch )

License
==========

MIT




