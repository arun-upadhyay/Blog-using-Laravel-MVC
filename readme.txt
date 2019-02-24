Make Controller
--> create a controller
php artisan make:controller
--> create a controller with methods
php artisan make:controller -r
--> Create model and correspoding controller
php artisan make:controller -r -m
--> create model, migration and controller 
php artisan make:model Student -mcr
--> migrate database
php artisan migrate 
--> List all the route list 
 php artisan route:list

 
How to run the project
* Make sure to have composer install in your systems.
* run composer install into this directory. All dependencies will be install. 
* Make sure to have mysql database connectivity setup 
* php artisan serve
* access your project at http://localhost:8000
