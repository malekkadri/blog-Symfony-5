# BLOG
`BLOG` is a blog based system made with Symfony 5 framework.
It's a multilingual blog

## Template
Free template (HTML + CSS) is from https://bootstrapmade.com (Moderna)

## prerequisite 
* PHP 7.4.3=+
* MySQL
* Symfony CLI (5)
* Composer
* Mail server (registration, contact, ...)

## features 
### Languages and frameworks
* PHP 7.4.3
* MySQL (MariaDB)
* HTML / CSS
* Javascript (Aos, Glightbox, Isotope, Validate, Purecounter, swipper, Waypoints, Bootstrap)
* Bootstrap (v5)
* Google fonts (Open Sans)
* Font awesome 5
### Translation
* Translation function (TransalatorInterface): EN, FR, ES
Add language with (as an example for spanish language): `symfony console translation:update --force es` then you'll have a new file in /translations folder you'll need to translate manually. Same command if you want to update the translation.
If you add any language, don't forget to update config/services.yaml adding the language 2 letters to `app.locales` like this:
`app.locales: [en, fr, es]`
### Entities
* articles
* comments
* tags
* categories
* users
### Pages
* home
* contact
* article single
* categories index
* category single
* tags index
* tag single
* user profile
* login
* registration
* admin section and dashboard
### Sidebar
* search
* categories with number of articles
* popular articles
* tags cloud

## To initialize the project 
* clone the repository: `git clone https://github.com/citizenz7/blog.git`
* Install all packages : `composer install`
* set up a `.env.local` file from `.env` with:
    * MySQL credentials, server address, server port, database name
    * MAILER_DSN info to send emails (i use Mailhog for dev and a SMTP server for prod)
* Create new database: `symfony console doctrine:database:create`
* Build the migration: `symfony console make:migration`
* Export into MySQL: `symfony console doctrine:migrations:migrate`
* Install CKEditor : `symfony console ckeditor:install`
* Install CKEditor assets : `symfony console assets:install public`
* Install Elfinder (file browser for CKEditor) : `symfony console elfinder:install`
* Change to PRODUCTION in `.env.local` (APP_ENV=prod)
* Empty cache : `symfony console cache:clear`
* Register a first account (/register) then change its role to ["ROLE_ADMIN"] in database
* Login with this admin account and connect to admin dashboard (/login)
* ... then start to create new categories and new articles
* Tags will be automaticaly created as you write them (SELECT2 JQuery plugin)
