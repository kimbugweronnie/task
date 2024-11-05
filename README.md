

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

## Creating server block files ie 

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premi

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
