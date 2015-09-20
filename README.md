# laravel-admin

[![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) ![Bower version](https://img.shields.io/bower/v/bootstrap.svg) [![npm version](https://img.shields.io/npm/v/bootstrap.svg)](https://www.npmjs.com/package/bootstrap) [![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

[![Selenium Test Status](https://saucelabs.com/browser-matrix/bootstrap.svg)](https://saucelabs.com/u/bootstrap)

A powerful Laravel [CRUD](https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers) (Create Read Update Delete) Content Management System(CMS) built on [Laravel](http://laravel.com/) 5.1, [Bootstrap](http://getbootstrap.com) 3.5.x, and [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html) 2.3.x.

Laravel-admin is a complete stand up of Laravel 5.1 CRUD (Create Read Update Delete) with admin panel based on AdminLTE front end framework built on Bootstrap 3.5.x.  This great with working with database driven applications and website. This is as lean as possible using the proper Larevel Methods, Views, and Controllers based routing. This project is being built on a local Vagrant VM flavor named Homestead which instruction on setting up can be found on Laravel's website. Setting up a Vagrant Dev env is highly recommended and super easy to do. This project will also use SASS and/or LESS preprocessors to generate the CSS. It may or may not use GULP.  It will use BOWER and COMPOSER. If you like Code Inighter  you will LOVE LARAVEL.

| laravel-admin Features  |
| :------------ |
|Built on [Laravel](https://github.com/laravel/laravel) 5.1.x|
|Front End and Admin Area are Responsive Using [Bootstrap](https://github.com/twbs/bootstrap) 3.5.x|
|CMS Built on [AdminLTE](https://github.com/almasaeed2010/AdminLTE) 2.3.x|
|Uses [MySQL](https://github.com/mysql) Database|

## [Laravel](http://laravel.com/) PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Official Laravel Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All Laravel Framework related issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### Laravel License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## [Bootstrap](http://getbootstrap.com) Front-End Framework

[![Build Status](https://img.shields.io/travis/twbs/bootstrap/master.svg)](https://travis-ci.org/twbs/bootstrap) ![Bower version](https://img.shields.io/bower/v/bootstrap.svg) [![npm version](https://img.shields.io/npm/v/bootstrap.svg)](https://www.npmjs.com/package/bootstrap) [![devDependency Status](https://img.shields.io/david/dev/twbs/bootstrap.svg)](https://david-dm.org/twbs/bootstrap#info=devDependencies) [![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development, created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thornton](https://twitter.com/fat), and maintained by the [core team](https://github.com/orgs/twbs/people) with the massive support and involvement of the community.

[Bootstrap](http://getbootstrap.com)'s documentation, included in this repo in the root directory, is built with [Jekyll](http://jekyllrb.com) and publicly hosted on GitHub Pages at [<http://getbootstrap.com>](http://getbootstrap.com).

## laravel-admin

[![Build Status](https://img.shields.io/travis/twbs/bootstrap/master.svg)](https://travis-ci.org/twbs/bootstrap)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

### Quick Project Setup
1. Run `sudo git clone https://github.com/jeremykenedy/laravel-admin.git laravel-admin`
2. Run `composer update` from the projects root folder
3. From the projects root run `cp .env.example .env`
4. Configure your .env file

.working here.

7. From the projects root run `php artisan migrate`
8. From the projects root run `sudo chmod -R 777 ../laravel-admin`
9. Go to your browser and refresh the projects page.
10. From the projects root run `sudo chmod -R 755 ../laravel-admin`

## Other Very Usefull Information

### Vagrant Dev Environment

## Start Vagrant

|Command        |Action           
|:------------- |:-------------|
| `vagrant up` | Start Vagrant VM |  
| `vagrant up --provision` | Start Vagrant VM if vagrantfile updated |    
| `vagrant halt` | Stop Vagrant VM |  

## Access Vagrant SSH and MySQL
|:Command        |Action      | 
|:------------- |:------------- |:-------------|
| ```sudo ssh vagrant@127.0.0.1 -p 222``` | Access Vagrant VM via SSH. Password is ``` vagrant  ``` |
| ```mysql -u homestead -ppassword``` | Access Vagrant VM MySQL. Password is ``` vagrant  ``` |
