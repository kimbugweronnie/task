

## Task

I am choosing deployment to a Linux Nginx Server.Bellow is a list of what we need

- Linux version 16 or 18
- [Install Nginx on the machine ](https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-16-04).
- [Install PHP 8.3,MySQL on the machine ](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04).
- [Install NVM on the machine ](https://monovm.com/blog/install-nvm-on-ubuntu/).We install nvm on the machine so that we 
can choose what version of node is suitable for our setup
- [PHP extensions should be installed and enabled](https://laravel.com/docs/11.x/deployment#server-requirements).

Assuming you have the credential to properly ssh into the server 

## Moving/Copying the application folder
After you unzip the folder to a location of choice and the copy the folder to var/www/ folder. By default, Nginx  is configured to serve documents out of a directory at /var/www/html.(Digital Ocean).

## Setting up the environment  for a laravel application
Here is a list of things you need to do 
- create a  .env file and specify the database credentials  of choice you can look at the .env.example file as a guide.
- Run php artisan key:generate to generate key
-  Run composer update 
-  Run npm install


## Setting up the seed data to be used
Since you installed mysql on the machine,you need to seed data into the database specified above
-  Run php artisan migrate:fresh --seed;

## Setting up a Vitual Host on nginx

Laravel provide a template to set up a  [Virtual Host ](https://laravel.com/docs/11.x/deployment#nginx) .Assuming a domain exists for the application and designated port.A vitual host is set up in /etc/nginx/sites-available/ in the names of  the domain for ease of identification.All virtual hosts need to enabled this can be done by sudo ln -s /etc/nginx/sites-available/domain /etc/nginx/sites-enabled/ which basically creates a link between /etc/nginx/sites-enabled/ and /etc/nginx/sites-available/domain.Ensure no issue with synax by running sudo nginx -t .Restart the nginx server after making this changes by sudo systemctl restart nginx


## Dealing with vite

Since we are working with vite and we had properly installed npm packages before.Run npm run build so that vite is built in the production environment.

## Optimizing and cache

Make sure APP_DEBUG is switched to false in the .env file.Run php artisan optimize to remove cache

