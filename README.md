# Laravel Project

## Project Installation <br>
Step 1: Clone the project from repo.<br>
Step 2: Run command "composer install" and "npm install" to install relevant packages.<br>
Step 3: Configure database inside project folder in file called laravel.sql import on your database or create a database laravel.<br>
Step 4: Configure .env file with your db credentails.<br>
Step 5: Run the migrations plus seed command to create the table with fake data.<br>
Step 6: Run command "php artisan serve" to intialize the server (URL: localhost:8000)<br>

## Following tasks has been completed based on the requirements:

### Question 1: Add a cron job schedular and schedular should take backup of mysql database and upload it on the google drive.
            - Schedular is added in app/Console/Kernal.php  (schedular name - backup:run)
            - Schedular will run on every night at 01:01.
            - On local machine we can run schedular by running following command : "php artisan backup:run".
            - But on live server we can create a cron and the cron will run the schedular automatically at midnight.
            - Example of cron job on server : "* * * * * cd /project-directory && php artisan schedule:run >> /dev/null 2>&1".
            - Mysql database backup can be done by running the command "php artisan backup:run".
            - You can also refer where the backup is created in Google Drive : https://drive.google.com/drive/folders/12WGURiv4rFFvLeRIM2exdJrehqonwgCq?usp=sharing

### Question 2: Create a REST API in Laravel which will read 20K records at a time from MySQL or MongoDB database & return them as JSON. API RTT(Round trip time) should be as minimum as possible.
            - There are two api's created:  First is without cache and Second is with cache
            - First API URL: http://127.0.0.1:8000/api/get-todo-list
            - Second API URL: http://127.0.0.1:8000/api/get-todo
            - File Location: app/Http/Controllers/Api/TodoListController
            - Method name: 1. todoListWithCache 
                           2. todoListWithoutCache
                           
### Question 3: Prepare SQL query such that there is a user table with column "grades". You have to find out the user records from users table where users have got grades in this pattern (1,3) or (1,3,2) etc.
            - API URL: http://127.0.0.1:8000/api/get-user
            - File Location: app/Http/Controllers/Api/UserController
            - Method name: getUserRecordsFromDB
