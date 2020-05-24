# Laravel Milestone project
### Team members:
- Valikahnov Okzhetpes
- Medelbekov Mirat
- Sagymbekov Adil
- Aubakirov Amirlan


### How to run this project
```
composer install 
cp .env.example .env
php artisan key:generate
```
In .env file write your tmdb api key to API_KEY= variable and STRIPE_KEY= with STRIPE_SECRET= and MAIL_USERNAME= with MAIL_PASSWORD=
```
php artisan migrate
php artisan db:seed --class=PlansSeeder
php artisan serve
```
### Also we hosted our website on Heroku:
`<link>`: https://goodmovie0.herokuapp.com/
