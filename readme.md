Sketch
===

Synopsis
---

Sketch is used to create a local development environment for Lightspeed (formerly knows as SEOshop) themes.
Lightspeed uses the ".rain" language as a template engine, which is almost identical to the better known language "Twig".


Requirements
---

- [Composer](https://getcomposer.org/)
- [PHP web server](http://php.net/manual/en/features.commandline.webserver.php): The router currently only works with Apache. You can port the apache rules to Nginx in the location block (will provide snippet for it soon)
- [Node.js](https://nodejs.org/en/)
- [Gulp](http://gulpjs.com/)


Installation
---

- Clone the Sketch repo `git clone https://github.com/Willemdumee/Sketch.git`
- Change into the cloned directory and run `npm install && composer install` in terminal.
- Update `sketch.config.json`, so that 'lightspeedUrl' matches your store's URL.
- Run `npm start` in terminal

In order to use browsersync: open url in browser with portnumber 3001 ( e.g. localhost:3001/sketch )


Connect to your own Lightspeed shop
---

- Create a Lightspeed shop (and create at least 1 product, 1 collection, 1 category, 1 product, 1 brand, 1 tag and 1 text page)
- Change `sketch.config.json` to connect to your Lightspeed shop. This should be equal to the index page.

License
---

MIT




