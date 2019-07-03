## How to install
- clone
- setup .env file
- composer install
- php artisan migrate:fresh
- php artisan voyager:install
- php artisan voyager:admin admin@admin.com --create
- php artisan db:seed

## Make seeders
 - php artisan iseed menus,menu_items --classnameprefix=AppMenu --force
 - php artisan iseed data_types,data_rows --classnameprefix=AppBread --force
 - php artisan iseed permissions,roles,permission_role --classnameprefix=AppPermissionRoles --force

