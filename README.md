# php-samples
PHP code samples



# Sample 1: Simple PHP MVC Framework

Use NGINX web server rewrite URL rule with base classes written in PHP to enable MVC. Please make sure that you have PHP, NGINX (or Apache) web server installed and setup before using this framework.

This sample is created with assumption that you already have basic understanding on MVC page cycle. You can refer to php_xinera_nginx.conf for sample NGINX's rewrite URL configuration.



# HOW TO USE THIS FRAMEWORK?

STEP 1 - Download sample-1 folder and rename sample-1 to your web application root folder name

STEP 2 - Configure your database connectivity in config.php file
          define('DB_NAME', '[DATABASE_NAME]');
          define('DB_USER', '[DATABASE_USERNAME]');
          define('DB_PASSWORD', 'DATABASE_PASSWORD');
          define('DB_HOST', '[DATABASE_HOST_NAME]');
          /* database engine can be MySql or MariaDB  */

STEP 3 - Configure your encryption key in config.php file
          define('ENCRYPTION_KEY', '[ENCRYPTION_KEY]');

STEP 4 - Understand the usage
          index.php will be invoked whenever there is any incoming request. It will then detect the module and parameters from the URL before calling the controller
          
          Folder structures
          |- static         => store static images, javascript and css files
          |- media          => store media content
          |- app
              |-- base          => base program to enable MVC
              |-- include       => keep your header and footer here
              |-- library       => keep your third party library file here
              |-- controllers   => program your controller here, refer to app/controllers/register.php for sample
              |-- models        => program your models here, refer to app/models/usermodel.php for sample
              |-- views         => program your web template here, refer to app/views/user/login.php for sample

STEP 5 - You are ready to GO!!
