# personalboilerplate
Minimal Boilerplate for personal use to jumpstart local Webdevelopment.
Just run "vagrant up" and start coding!

##Aim
My aim was to create a light environment to avoid some setup an get to coding almost immediately. Hopefulyy I made it obvious which files can be deployed, and which files should stay on your machine.

### What to deploy
Just deploy or upload everything under "/htdocs" and keep all files in "./" and "/src" on your machine. These files should not get uploaded to a running server. (They could, but it's best, to keep your live-directory clean.)

## Some Specs
- vagrant
- php
- sass
- jquery
- compiling using grunt

### Vagrant
A minimal Box to start a local PHP-Environment with ease. Almost a clone of https://github.com/sapienza/vagrant-php-box. Just one small modification.
Remember: You need to install "Vagrant" (https://www.vagrantup.com/) and Virtualbox (https://www.virtualbox.org/) first.
Hint: The Box displays a message after the Box is up an running. You can use this message to set a trigger in some Tools (e.g. iTerm2) and get notified after the box is running.

### PHP
Currently using Version 5

### SASS
SASS is compiled using grunt. (http://gruntjs.com/)
normalize.scss is used to, eh, normalize, the CSS. (https://github.com/necolas/normalize.css)

### jquery
Get jQuery from Google, because for local development it's the easiest way to get started. The file get's loaded in modules/framework/javascript.php, so you can change this here.

## How to get started
1. Create a new folder/project and open up your terminal.
2. Enter `vagrant up`
3. Wait a while until all components are loade an the box is running. (The first start can take a while)
4. Your machine is running and can be accessed in your browser via `http://127.0.0.1:8080/`. If you see an Ubuntu-Startpage, just delete the index.html
5. Make sure, you have node.js installed on your computer (https://nodejs.org/en/) then you need to run the following command once to get started with grunt `npm install -g grunt-cli` (this installs grunt globally on your machine - some machines require sudo `sudo npm install -g grunt-cli`). Now just run `npm install`to install grunt. All required components are downloaded now.
6. to compile SASS/CSS on the fly, just enter `grunt watch` in your terminal now
7. start buildung

## TODO
- prefer .php-files instead of .html-files
