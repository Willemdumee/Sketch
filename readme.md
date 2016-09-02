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

- fire up your webserver
- Create a folder that is accessible by your webserver
- Download Sketch `git clone https://github.com/Willemdumee/Sketch.git .` 
- Run `composer install` in terminal
- Run `npm install` in terminal
- Define 'base url' inside 'config.php' (e.g. http://localhost/myawesomeshop)
- Change gulpfile.js line 19 `proxy: localhost:80/sketch` to the base url which you also defined above
- Run `gulp` in terminal

In order to use browsersync: open url in browser with portnumber 3001 ( e.g. localhost:3001/sketch )


Connect to your own Lightspeed shop
==========

- Create a Lightspeed shop (and create at least 1 product, 1 collection, 1 category, 1 product, 1 brand, 1 tag and 1 text page)
- Change 'config.php' to connect a Lightspeed shop. You should define urls to
..* Index page
..* Collection page
..* Category page
..* Product page
..* Text page 

License
==========

MIT




