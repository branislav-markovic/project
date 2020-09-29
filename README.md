# Project

<strong>Run project:</strong>

1. Download or clone git repo
2. Run composer install
3. Make .env
4. Run following commands php artisan key:generate php artisan cache:clear php artisan config:clear

<strong>Short project description:</strong>

There are three modules:

1. Documents
2. Alarms
3. Admin

Every module has separated services, views and controllers.

Module admin consuming services (AlarmService and DocumentService) from relevant modules.

<strong>Short video description:</strong>

https://drive.google.com/file/d/1H4nLfKxsCOC6JDBWVZAknnKOSqh3l3iY/view?usp=sharing
