## Create new Laravel project
- composer create-project laravel/laravel example-app

## List of Development Commands

|   ARTISAN COMMANDS    |   DESCRIPTION     |
|:---------------------:|:------------------|
| ```php artisan serve```     | Generate a localhost server |
| ```php artisan migrate```   |  used when we want a fresh or new installation of our database |
| ```php artisan route:list``` | Show all  the list of all the roots currently in your application |
| ```php artisan db:seed``` | command to populate your database with test or sample data |
| ```php artisan make:factory TaskFactory --model=Task``` | creates a factory file named TaskFactory.php that helps generate fake data for the Task model. This fake data is handy for testing purposes or populating your database with sample information. |
| ```php artisan migrate:rollback``` | rolls back the last database migration that was performed |
| ```php artisan migrate:refresh --seed``` | reset your database to a clean state with both the schema and data intact, especially after making changes to migrations or seeds. |