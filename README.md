# laravel-admin [![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

[![Selenium Test Status](https://saucelabs.com/browser-matrix/bootstrap.svg)](https://saucelabs.com/u/bootstrap)

A [Laravel](http://laravel.com/) 5.2.x, [Bootstrap](http://getbootstrap.com) 3.5.x, and [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html) 2.3.x. project.

| Laravel-Admin Features  |
| :------------ |
|Built on [Laravel](http://laravel.com/) 5.2|
|Admin is built on [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html) 2.3|
|Uses [MySQL](https://github.com/mysql) Database|
|Uses [Artisan](http://laravel.com/docs/5.1/artisan) to manage database migration, schema creations, and create/publish page controller templates|
|Dependencies are managed with [COMPOSER](https://getcomposer.org/)|
|Assets are managed with [BOWER](http://bower.io/)|
|Assets are organized and processed with [GULPJS](http://gulpjs.com/)|
|Laravel Scaffolding **User** and **Administrator Authentication**.|
|Dynamic Breadcrumbs|
|User Registration|
|User Registration IP Capture|
|User Login|
|User Dashboard|
|User Profile|
|User Forgot Password|
|User email address based Gravatar|
|User Management - admin access|
|User List - admin access|
|404 Page for public|
|404 Page for users|

### Quick Project Setup
1. Run `git clone https://github.com/jeremykenedy/laravel-admin.git laravel-admin`
2. Create a MySQL database for the project
    * ```mysql -u root -p```, if using Vagrant: ```mysql -u homestead -psecret```
    * ```create database laravelAdmin;```
    * ```\q```
3. From the projects root run `sudo cp .env.example .env`
4. Configure your `.env` file
5. From the projects root folder run `sudo chmod -R 777 ../laravel-admin`
6. Run `sudo composer update` from the projects root folder
7. Run `sudo npm install` from the projects root folder
8. From the projects root folder run `sudo chmod -R 777 ../laravel-admin`
9. Run `bower update` from the projects root folder
10. Run `sudo gulp copyfiles` from the projects root folder
11. Run `sudo gulp` from the projects root folder
  * NOTE: In production run `sudo gulp --production`
12. From the projects root folder run `sudo chmod -R 755 ../laravel-admin`
13. From the projects root folder run `php artisan key:generate`
14. From the projects root folder run `php artisan migrate`
15. From the projects root folder run `composer dump-autoload`
16. From the projects root folder run `php artisan db:seed`

###### Seeds
1. Seeded Roles
   * user
   * editor
   * administrator

### Laravel-Admin URL's (routes)
* ```/auth/login```
* ```/auth/logout```
* ```/auth/register```
* ```/user```
* ```/user/{user id}```
* ```/auth/admin```
* ```/auth/superadmin```

### Laravel-Admin Alias Redirect URL's (routes)
* ```/admin```
* ```/superadmin```
* ```/home```
* ```/dashboard```
* ```/login```
* ```/logout```
* ```/register```
* ```/reset```

## laravel-admin

[![Build Status](https://img.shields.io/travis/twbs/bootstrap/master.svg)](https://travis-ci.org/twbs/bootstrap)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Example `.env` file:
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString

DB_HOST=localhost
DB_DATABASE=laravelAdmin
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

### File Structure
```
laravel-admin/
    ├── .bowerrc
    ├── .env
    ├── bower.json
    ├── composer.json
    ├── gulpfile.js
    ├── LICENSE
    ├── package.json
    ├── phpspec.yml
    ├── phpunit.xml
    ├── README.md
    ├── server.php
    ├── app/
    │    ├── User.php
    │    └── Http/
    │       ├── breadcrumbs.php
    │       ├── kernal.php
    │       ├── routes.php
    │       ├── Controllers/
    │       │   ├── Auth/
    │       │   │   ├── AuthController.php
    │       │   │   └── PasswordController.php
    │       │   ├── adminController.php
    │       │   ├── Controller.php
    │       │   ├── UsersController.php
    │       │   └── WelcomeController.php
    │       ├── Middleware/
    │       │   ├── Admin.php
    │       │   ├── Authenticate.php
    │       │   ├── EncryptCookies.php
    │       │   ├── RedirectAuthenticated.php
    │       │   ├── SuperAdmin.php
    │       │   └── VerifyCsrfToken.php
    │       └── Requests/
    │           └── Request.php
    ├── config/
    │   ├── app.php
    │   ├── auth.php
    │   ├── bootstrapper.php
    │   ├── breadcrumbs.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── compile.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── gravatar.php
    │   ├── image.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── services.php
    │   ├── session.php
    │   ├── sluggable.php
    │   └── view.php
    ├── database/
    │   ├── migrations/
    │   │   ├── 2014_10_12_000000_create_users_table.php
    │   │   ├── 2014_10_12_100000_create_password_resets_table.php
    │   │   └── 2015_10_06_064037_add_userlevels_to_users_table.php
    │   └── seeds/
    │       └── DatabaseSeeder.php
    ├── public/
    │   ├── .htaccess
    │   ├── index.php
    │   └── assets/
    │       ├── css/
    │       │   ├── admin/
    │       │   │   ├── admin.css
    │       │   │   ├── login.css
    │       │   │   └── components/
    │       │   │       ├── admin-core.css
    │       │   │       ├── admin-font-icons.css
    │       │   │       ├── admin-plugins.css
    │       │   │       ├── admin-skins.css
    │       │   │       └── login-plugins.css
    │       │   ├── fonts/
    │       │   └── vendor/
    │       │       └── bootstrap.css
    │       ├── fonts
    │       └── js
    │           ├── login.js
    │           └── admin/
    │               ├── admin-plugins.js
    │               └── admin.js
    └── resources/
        ├── assets/
        ├── lang/
        └── views/
            ├── welcome.blade.php
            ├── admin/
            │   ├── errors/
            │   │   └── users404.blade.php
            │   ├── forms/
            │   │   ├── login.blade.php
            │   │   ├── register.blade.php
            │   │   └── reset-pw.blade.php
            │   ├── layouts/
            │   │   ├── dashboard.blade.php
            │   │   └── user-progile.blade.php
            │   ├── modules/
            │   │   ├── blank.blade.php
            │   │   ├── calendar-tasks.blade.php
            │   │   ├── chat-boxes.blade.php
            │   │   ├── control-sidebar.blade.php
            │   │   ├── quick-email-widget.blade.php
            │   │   ├── sales-graph.blade.php
            │   │   ├── stat-boxes.blade.php
            │   │   ├── tabbed-charts.blade.php
            │   │   ├── todo-list.blade.php
            │   │   └── visitors.blade.php
            │   ├── partials/
            │   │   ├── breadcrumbs.blade.php
            │   │   ├── footer.blade.php
            │   │   ├── header.php.php
            │   │   ├── main-sidebar.blade.php
            │   │   └── nav.blade.php
            │   └── structure/
            │       ├── head.blade.php
            │       ├── jscripts.blade.php
            │       └── master.blade.php
            ├── auth/
            │   ├── login.blade.php
            │   ├── password.blade.php
            │   ├── register.blade.php
            │   └── reset.blade.php
            ├── emails/
            │   ├── contact.blade.php
            │   └── password.blade.php
            ├── errors/
            │   ├── 404.blade.php
            │   └── 503.blade.php
            └── vendor/

```

#### Laravel Developement Packages Used References

###### FORM and HTML classes for Laravel 5.1
* [Documentation and Usage](https://github.com/illuminate/html)

###### Bootstrapper for Laravel 5.1
* [Documentation and Usage](http://bootstrapper.eu1.frbit.net/)
* [Repository](https://github.com/patricktalmadge/bootstrapper/)

###### Gravatar for Laravel 5.1
* [Documentation, Repository, and Usage](https://github.com/creativeorange/gravatar)

###### Image Processing for Laravel 5.1
* [Documentation and Usage](http://image.intervention.io/getting_started/installation#laravel)
* [Repository](https://github.com/Intervention/image)

###### Breadcrumbs for Laravel 5.1
* [Documentation and Usage](http://laravel-breadcrumbs.davejamesmiller.com/en/latest/index.html)
* [Repository](https://github.com/davejamesmiller/laravel-breadcrumbs)

###### Eloquent-Sluggable for Laravel 5.1
* [Documentation, Repository, and Usage](https://github.com/cviebrock/eloquent-sluggable)

---

## Development Environement References and help

#### VAGRANT Dev Environment References

###### VAGRANT Virtual Machine Details
|Item        |Value:
|:------------- |:-------------|
|Hostname|homestead|
|IP Address|192.168.10.10|
|Username|vagrant|
|SU Password|vagrant|
|Database Host|127.0.0.1|
|Database Port|33060|
|Database Username|homestead|
|Database Password|secret|
###### Start VAGRANT
|Command        |Action
|:------------- |:-------------|
| `vagrant up` | Start Vagrant VM |
| `vagrant up --provision` | Start Vagrant VM if vagrantfile updated |
| `vagrant halt` | Stop Vagrant VM |

###### Access VAGRANT SSH and MySQL
|Command        |Action      |
|------------- |:------------- |:-------------|
| ```sudo ssh vagrant@127.0.0.1 -p 222``` | Access Vagrant VM via SSH. Password is ``` vagrant  ``` |
| ```mysql -u homestead -psecret``` | Access Vagrant VM MySQL. Password is ``` vagrant  ``` |

For reference AdminLTE can be installed into projects using Bower.
If you do not have Bower, it can be installed using Node Package Manager (NPM).
If you do not have NPM, it can be installed using NODE JS.

###Install NODE JS
####Node JS can be installed muliple ways:
Mac GUI Installer, easiest way (Simply [Download](https://nodejs.org/en/) and Install)

####Node JS can also be installed using Homebrew Package Manager with the following command:
```
brew install node
```

###Install Node Package Manager (NPM)
####NPM can be installed using the following command:
```
npm install -g bower
```

###Install Bower
####Bower can be installed with the following command:
```
sudo npm install -g bower
```

###Install GULP
####GULP can be installed using the following command:
```
npm install -g gulp
```

###Install COMPOSER

####COMPOSER can be installed using the following commands:
```
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

####COMPOSER on MAC OS X can be installed using the following commands:
```
sudo brew update
sudo brew tap homebrew/dupes
sudo brew tap homebrew/php
sudo brew install composer
```

#### Very Helpful Aliases
You can edit/or create your systems (MAC OS X) alias file with the follwing command:
```
sudo vim ~/.bash_profile
```

To update TERMINAL CLI to be able to use the the added aliases run the following command:
```
. ~/.bash_profile
```

##### *You can choose all or some of the following aliases to add to your `.bash_profile`:*

###### Vagrant/Homestead Aliases
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

##### General Very Helpful Aliases
###### Cleanup
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

A nice alias to **list and delete all** the MAC and OSX filesystem boogers:
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
###### Show MAC OS X files
Alias to **show all hidden files** on MAC OS X filesystem:
```
alias showfiles='defaults write com.apple.finder AppleShowAllFiles YES; killall Finder /System/Library/CoreServices/Finder.app'
```

Alias to **hide all hidden files** on MAC OS X filesystem:
```
alias hidefiles='defaults write com.apple.finder AppleShowAllFiles NO; killall Finder /System/Library/CoreServices/Finder.app'
```



##### GIT CLI Quick alias functions
###### Quick GIT PUSH
```
function quickpush {
    _currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git add -A
    sudo git commit -m "quick push"
    sudo git push $_currentBranch
}
```

###### Another flavor of Quick GIT PUSH
```
function push {
    _currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git add -A
    sudo git commit -m "quick push"
    sudo git push $_currentBranch
}
```

###### Quick GIT PULL
```
function quickpull {
    _currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git pull $_currentBranch
}
```

###### Another flavor of Quick GIT PULL
```
function pull {
    _currentBranch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
    sudo git pull $_currentBranch
}
```

##### My keyboard hates me GIT helper aliases:
```
alias gut='git'
alias got='git'
alias car='cat'
alias commut='commit'
alias commmit='commit'
alias comit='commit'
alias commot='commit'
```

##### Typing `clear` takes too many keystrokes alias helper:
```
alias cl='clear'
```

###### Helpful quick filesystem `ls` alias helpers:
```
alias la='ls -la'
alias ll='ls -la'
```

##### **Alias** and **`.bash_profile management`** aliases:
###### **Show** Aliases helpers:
```
alias listalias='cat ~/.bash_profile'
alias aliaslist='cat ~/.bash_profile'
alias list='cat ~/.bash_profile'
alias text='cat ~/.bash_profile'
alias aliasshow='cat ~/.bash_profile'
```

###### **Edit** Aliases helpers:
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

#### Things not working (Troubleshooting)?

##### Issue: Cannot access project through web browser after running vagrant up / homestead up

###### Error Message from Browser:
```
This webpage is not available
ERR_NAME_NOT_RESOLVED
```

##### 1. Check Vagrant/Homestead configuration
###### a. Open configuration with the following command:

vim ~/.homestead/Homestead.yaml or laraedit

###### b. Check to make sure your folders are mapped (See example A1.):
Note:
map: Is the path to the your files on your local machine
to: Is the virtual file path to your projects that vagrant will create
###### Example A1
```
folders:
  - map: /Users/yourLocalUserName/Sites/project1
    to: /home/vagrant/Sites/project1/public

  - map: /Users/yourLocalUserName/Sites/project2
    to: /home/vagrant/Sites/project2/public
```
##### c. Check to make sure your projects URI and SYMLINK is mapped (See example A2):
map: Is the local URI of your project
to: Is the virtual symlink to your projects virtual file path
###### Example A2
```
sites:
  - map: project1.local
    to: /home/vagrant/Sites/project1/public

  - map: project2.app
  to: /home/vagrant/Sites/project2/public
```
#### 2. Check your local hosts file for local pointer redirect:
##### a.  Open your hosts file (See example B1):
Note: Instructions are for Mac OS X
###### Example B1
`sudo vim /etc/hosts` or `edithost`

##### b.  Edit your hosts file (See example B2):
Note: Replace examples URI used in Vargrant/Homestead configuration file and use the IP address of your local Vargrant/Homestead virtual machine instance

###### Example B2 - The last line is the important part of the example
```
##
# Host Database
#
# localhost is used to configure the loopback interface
# when the system is booting.  Do not change this entry.
##
127.0.0.1        localhost
255.255.255.255  broadcasthost
192.168.10.10    laravel-admin.local
```

---

## Enjoy

###### ~ **Jeremy**
