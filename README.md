## Send Email Using Queue in Laravel 9

### Installation
1. Clone the repository
2. Run `composer install`
3. Run `cp .env.example .env`
4. Modify the `.env`
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

QUEUE_CONNECTION=database

API_EMAIL=
API_TOKEN=
```
5. Mofify the `config/app.php`
```
'api_email' => env('API_EMAIL'),
'api_token' => env('API_TOKEN'),
```
6. Run `php artisan migrate`
7. Run `php artisan queue:work`
8. Run `php artisan serve`
9. Open `http://localhost:8000/sendEmail` in your browser
10. Done. You can check your email.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
