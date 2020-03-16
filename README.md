
# Relaxing Music Api

Relaxing Music Api for serving [Relaxing Music Mobile Application](https://github.com/MrAbdelrahman10/relaxing-music-mobile).


# Steps to install  

## Installing vie cli
1. Rename **.env.example** to **.env** and update values
2. Install packages via terminal **composer install**
3. Run **php artisan migrate --seed** to generate database table with sample data

## Installing vie docker
1. To Install via docker run: **docker-compose up -d**
2. Run **docker-compose exec app composer install** if composer files not installed
2. Run **docker-compose exec app php artisan migrate --seed** to generate database table with sample data


# Run via CLI

```
php -S localhost:8000 -t public

```


# Using Api

To browse and use api by postman, use this [link](http://bit.ly/rmapi).


## Security Vulnerabilities

If you discover a security vulnerability within Relaxing Music, please send an e-mail to Abdelrahman Mohamed at mrabdelrahman10@gmail.com. All security vulnerabilities will be promptly addressed.


## License

The Relaxing Music Api is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).