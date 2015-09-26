# laravel-admin

[![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) ![Bower version](https://img.shields.io/bower/v/bootstrap.svg) [![npm version](https://img.shields.io/npm/v/bootstrap.svg)](https://www.npmjs.com/package/bootstrap) [![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

[![Selenium Test Status](https://saucelabs.com/browser-matrix/bootstrap.svg)](https://saucelabs.com/u/bootstrap)

A **Clean Powerful Laravel** [CRUD](https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers) (**C**reate **R**ead **U**pdate **D**elete) **CMS** (**C**ontent **M**anagement **S**ystem) built on [Laravel](http://laravel.com/) 5.1.x, [Bootstrap](http://getbootstrap.com) 3.5.x, and [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html) 2.3.x.

laravel-admin is a complete stand up of Laravel 5.1 CRUD (Create Read Update Delete) with admin panel based on AdminLTE front end framework built on Bootstrap 3.5.x.  This great with working with database driven applications and website. This is as lean as possible using the proper Larevel Methods, Views, and Controllers based routing. This project is being built on a local Vagrant VM flavor named Homestead which instruction on setting up can be found on Laravel's website. Setting up a Vagrant Dev env is highly recommended and super easy to do. This project will also use SASS and/or LESS preprocessors to generate the CSS. It may or may not use GULP.  It will use BOWER and COMPOSER. If you like Code Inighter  you will LOVE LARAVEL.

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

~~7. From the projects root run `php artisan migrate`
8. From the projects root run `sudo chmod -R 777 ../laravel-admin`
9. Go to your browser and refresh the projects page.
10. From the projects root run `sudo chmod -R 755 ../laravel-admin`~~

### Commonly Used Folders and Files Structure
```
laravel-admin/
   ├── app/
   │   ├── Http/
   │   │   └── routes.php
   ├── config/
   │   ├── app.php
   │   ├── database.php
   │   └── view.php
   ├──
   │   ├──
   │   │	├──
   │   │   │   ├──
   │   │   │   │   ├──
   │   │   │   │   │   ├──
   │   │   │   │   │   │   ├──
   │   │   │   │   │   │   │   └──
   │   │   │   │   │   │   └──
   │   │   │   │   │   └──
   │   │   │   │   └──
   │   │   │   └──
   │   │   └──
   │   └──
   ├──
   └──
```

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
|------------- |:------------- |:-------------|
| ```sudo ssh vagrant@127.0.0.1 -p 222``` | Access Vagrant VM via SSH. Password is ``` vagrant  ``` |
| ```mysql -u homestead -ppassword``` | Access Vagrant VM MySQL. Password is ``` vagrant  ``` |

## Very Helpful Aliases
You can edit/or create your systems (MAC OS X) alias file with the follwing command:
```
sudo vim ~/.bash_profile
```

To update TERMINAL CLI to be able to use the the added aliases run the following command:
```
. ~/.bash_profile
```

### *You can choose all or some of the following aliases to add to your `.bash_profile`:*

### Vagrant/Homestead Aliases
```
alias machost='sudo vim /etc/hosts'
alias edithost='sudo vim /etc/hosts'
alias sshlara='sudo ssh vagrant@127.0.0.1 -p 2222'
alias laraedit='vim ~/.homestead/Homestead.yaml '
alias aliaslara='vim ~/.homestead/aliases'
alias laraalias='vim ~/.homestead/aliases'
alias sql='mysql -u homestead -psecret'
alias larasql='mysql -u homestead -psecret'
alias updatecomposer='sudo composer self-update'
alias rollbackcomposer='sudo composer self-update --rollback'
```

A helpful bashfile alias function to **start VAGRANT** instance:
```
function laraup {
  _pwd=$(pwd)
  startVM(){
    vagrant up --provision
  }
  echo "=============================================================================="
  echo "****** STARTING LARAVEL VAGRANT INSTANCE "
  echo "=============================================================================="
  cd ~/Homestead/
  if startVM ; then
    echo "=============================================================================="
    echo "****** SUCCESS - LARAVEL VAGRANT STARTED :)~"
    echo "=============================================================================="
  else
    echo "=============================================================================="
    echo "****** ERROR - LARAVEL VAGRANT DID NOT START :("
    echo "=============================================================================="
  fi
  cd $_originalDir
}
```

A helpful bashfile alias function to **shutdown/halt/stop VAGRANT** instance:
```
function laradown {
  _pwd=$(pwd)
  stopVM(){
    vagrant halt
  }
  echo "=============================================================================="
  echo "****** STOPPING LARAVEL VAGRANT INSTANCE "
  echo "=============================================================================="
  cd ~/Homestead/
  if stopVM ; then
    echo "=============================================================================="
    echo "****** SUCCESS - LARAVEL VAGRANT SHUTDOWN :)~"
    echo "=============================================================================="
  else
    echo "=============================================================================="
    echo "****** ERROR - LARAVEL VAGRANT DID SHUTDOWN :("
    echo "=============================================================================="
  fi
  cd $_originalDir
}
```

A helpful bashfile alias function to **remove VAGRANT** instance:
```
function larakill {
  _pwd=$(pwd)
  killVM(){
    vagrant destroy
  }
  echo "=============================================================================="
  echo "****** DESTROYING LARAVEL VAGRANT INSTANCE "
  echo "=============================================================================="
  cd ~/Homestead/
  if killVM ; then
    echo "=============================================================================="
    echo "****** SUCCESS - LARAVEL VAGRANT DESTROYING :)~"
    echo "=============================================================================="
  else
    echo "=============================================================================="
    echo "****** ERROR - LARAVEL VAGRANT WAS NOT DESTROYING :("
    echo "=============================================================================="
  fi
  cd $_originalDir
}
```

### General Very Helpful Aliases
#### Cleanup
A nice alias to **list all** the MAC and OSX filesystem booger:
```
alias cleanprint='
find . -name "*.DS_Store" -print;
find . -name "*.DS_Store" -print;
find . -name "*._DS_Store" -print;
find . -name "._.DS_Store" -print;
find . -name ".DS_Store" -print;
find . -name "Thumbs.db" -print;
find . -name "._.*" -print;
find . -name "._*" -print ;
'
```

A nice alias to **delete all** the MAC and OSX filesystem booger:
```
alias cleanrm='
find . -name "*.DS_Store" -delete;
find . -name "*.DS_Store" -delete;
find . -name "*._DS_Store" -delete;
find . -name "._.DS_Store" -delete;
find . -name ".DS_Store" -delete;
find . -name "Thumbs.db" -delete;
find . -name "._.*" -delete;
find . -name "._*" -delete ;
'
```

A nice alias to **list and delete all** the MAC and OSX filesystem booger:
```
alias cleanboth='
find . -name "*.DS_Store" -print; 
find . -name "*.DS_Store" -print; 
find . -name "*._DS_Store" -print; 
find . -name "._.DS_Store" -print; 
find . -name ".DS_Store" -print; 
find . -name "Thumbs.db" -print; 
find . -name "._.*" -print; 
find . -name "._*" -print ; 
find . -name "*.DS_Store" -delete;
find . -name "*.DS_Store" -delete;
find . -name "*._DS_Store" -delete;
find . -name "._.DS_Store" -delete;
find . -name ".DS_Store" -delete;
find . -name "Thumbs.db" -delete;
find . -name "._.*" -delete;
find . -name "._*" -delete ;
'
```
#### Show MAC OS X files
Alias to **show all hidden files** on MAC OS X filesystem:
```
alias showfiles='defaults write com.apple.finder AppleShowAllFiles YES; killall Finder /System/Library/CoreServices/Finder.app'
```

Alias to **hide all hidden files** on MAC OS X filesystem:
```
alias hidefiles='defaults write com.apple.finder AppleShowAllFiles NO; killall Finder /System/Library/CoreServices/Finder.app'
```



### GIT CLI Quick alias functions
#### Quick GIT PUSH
```
function quickpush {
	_currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git add -A
    sudo git commit -m "quick push"
    sudo git push $_currentBranch
}
```

#### Another flavor of Quick GIT PUSH
```
function push {
	_currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git add -A
    sudo git commit -m "quick push"
    sudo git push $_currentBranch
}
```

#### Quick GIT PULL
```
function quickpull {
	_currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git pull $_currentBranch
}
```

#### Another flavor of Quick GIT PULL
```
function pull {
	_currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git pull $_currentBranch
}
```

### My keyboard hates me GIT helper aliases:
```
alias gut='git'
alias got='git'
alias car='cat'
alias commut='commit'
alias commmit='commit'
alias comit='commit'
alias commot='commit'
```

### Typing `clear` takes too many keystrokes alias helper:
```
alias cl='clear'
```

### Helpful quick filesystem `ls` alias helpers:
```
alias la='ls -la'
alias ll='ls -la'
```

### **Alias** and **`.bash_profile management`** aliases:
#### **Show** Aliases helpers:
```
alias listalias='cat ~/.bash_profile'
alias aliaslist='cat ~/.bash_profile'
alias list='cat ~/.bash_profile'
alias text='cat ~/.bash_profile'
alias aliasshow='cat ~/.bash_profile'
```

#### **Edit** Aliases helpers:
```
alias aliasedit='sudo vim ~/.bash_profile'
alias editalias='sudo vim ~/.bash_profile'
```

#### **Restart/Enable** Aliases helpers:
```
alias aliasreset='. ~/.bash_profile'
alias aliasr='. ~/.bash_profile'
alias alr='. ~/.bash_profile'
alias alsr='. ~/.bash_profile'
alias aliasrestart='. ~/.bash_profile'
```

## Things not working?

### Cannot access project through web browser after running vagrant up / homestead up

#### Error Message from Browser:
```
This webpage is not available
ERR_NAME_NOT_RESOLVED
```

###### 1. Check Vagrant/Homestead configuration
####### a. Open configuration with the following command:

vim ~/.homestead/Homestead.yaml or laraedit

####### b. Check to make sure your folders are mapped (See example A1.):
Note: 
map: Is the path to the your files on your local machine
to: Is the virtual file path to your projects that vagrant will create
######## Example A1
```
folders:
  - map: /Users/yourLocalUserName/Sites/project1
    to: /home/vagrant/Sites/project1/public
    
  - map: /Users/yourLocalUserName/Sites/project2
    to: /home/vagrant/Sites/project2/public
```

####### c. Check to make sure your projects URI and SYMLINK is mapped (See example A2):
map: Is the local URI of your project
to: Is the virtual symlink to your projects virtual file path
######## Example A2
```
sites:
  - map: project1.local
    to: /home/vagrant/Sites/project1/public
  
  - map: project2.app
  to: /home/vagrant/Sites/project2/public
```

###### 2. Check your local hosts file for local pointer redirect: 	

####### a.  Open your hosts file (See example B1): 
Note: Instructions are for Mac OS X	
######## Example B1	
`sudo vim /etc/hosts` or `edithost`

####### a.  Edit your hosts file (See example B2): 
Note: Replace examples URI used in Vargrant/Homestead configuration file and use the IP address of your local Vargrant/Homestead virtual machine instance






