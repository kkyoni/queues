1) composer create-project laravel/laravel Queues

2) php artisan make:mail SendEmailTest

3) resources/views/emails/test.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>How to send mail using queue in Laravel 8? - ItSolutionStuff.com</title>
</head>
<body>

<center>
<h2 style="padding: 23px;background: #b3deb8a1;border-bottom: 6px green solid;">
    Queues
</h2>
</center>

<p>Hi, Sir</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<strong>Thank you Sir. :)</strong>

</body>
</html>

4) env
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=xyz@gmail.com
MAIL_PASSWORD=123456
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=xyz@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

5) QUEUE_CONNECTION=database

6) php artisan queue:table

7) php artisan migrate

8) php artisan make:job SendEmailJob

9) routes/web.php
Route::get('email-test', function(){
  
    $details['email'] = 'your_email@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('done');
});

10) php artisan queue:listen

11) php artisan config:clear

12) php artisan serve

13) http://localhost:8000/email-test
