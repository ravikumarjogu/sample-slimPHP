# sample-slimPHP
A sample php project created using Slim 2.x framework. This project also helps in setting up Slim 2.x framework for your php.

## Features:
* PHP 5.x
* Slim 2.x
* Bootstrap v3.3

##Development Tools
* Linux
* Sublime

## Install
1. Download Slim 2.x microframework from here[https://github.com/slimphp/Slim/tree/2.x]
2. Extract the folder
3. Place it in <code> var/local/Slim</code>
4. Create your project here <code> var/local/Your-Project</code>
5. Go to <code>   var/www/</code> create
 * .htaccess See here[/www/.htaccess]
 * index.php See here[/www/index.php]

## Run
<code>$ service apache2 start</code>

## Problems
* If you face errors from htaccess run following command<br>
<code>$ sudo a2enmod rewrite && sudo service apache2 restart</code>

* If your nginx running on same port of http(80) then kill the process<br>
<code>$ ps -aux|grep nginx</code><br>
<code>$ kill -9 NGINX-PID</code>


##Style
<code>command</code>: Run in terminal or Emphasis on the directory<br>
CAPITAL: indicates variable(ex: NGINX-PID)

##References
* Slim 2.x[https://github.com/slimphp/Slim/tree/2.x]
