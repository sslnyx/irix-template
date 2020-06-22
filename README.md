
## Installation

### 1. Clone

- Clone this repo to your local machine using `git clone git@github.com:sslnyx/irix-template.git projectName`
- Change "projectName" with your desired project name.

### 2. Install Composer Dependencies & NPM Dependencies

- `composer install`

- `npm install`

### 3. Create a copy of your .env file

- `cp .env.example .env`

### 4. Generate an app encryption key

- `php artisan key:generate`


### 5. Create an empty database for our application

- `php artisan migrate`


### 6. [Optional]: Seed the database

If your repository has a seeding file setup, then now is the time to run the seed, which fills your database with starter or dummy data. If the repo doesn’t mention the existence of a seeder file, then skip this step.

After the migrations are complete and you have the database structure required, then you can seed the database (which means add dummy data to it).

- `php artisan db:seed`
