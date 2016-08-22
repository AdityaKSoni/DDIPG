# DDIPG
> The aim of this project is to provide web based tools and informative sources for the students of [Dual Degree Integrated course, RGPV](https://www.rgpv.ac.in/Departments/DDDept.aspx ).

The project is under development and will be live soon.

## Want to Contribute ?
> **Note: Contributions is only accepted if you are a current RGPV Dual Degree Student**, otherwise it will be ignored (Please do not waste your valuable time). Interested DDIPG student can contact to any of the present contributor of the project in person before starting to work upon this project.

## Quick start
1.	Clone the repo: git clone https://github.com/faizsiddiqui/DDIPG.git
2.	Install required tools -
	-	[XAMPP](https://www.apachefriends.org/download.html) or [WAMP](http://www.wampserver.com/en/) for PHP and MySQL
	-	[Composer](https://getcomposer.org/Composer-Setup.exe)
	- [Laravel](https://laravel.com/docs/5.2#installation)
	- 	[Node](http://nodejs.org/en/download/) [Skip if not interested in front-end]
3.	To run the project enter the following command in the project root directory one after another.
	1. 	```composer install```
	2.	```npm install --no-bin-links``` [Skip if not interested in front-end]
	3.	```mv .env.example .env``` [After that change database and root user information in the .env file according to your environment]
	4.	```php artisan key:generate```
	5.	```php artisan migrate```
	6.	```php artisan db:seed```
	7.	```php artisan serve```


### Database Schema

![Database Schema](http://image.prntscr.com/image/554cede79d2f42b3acf6d50034133596.png "Database Schema")
