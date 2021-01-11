# Ibventur SME 

Test Project

## Requirements
* PHP >= 7.1.3
* Composer
* Nodejs >= 9.11.1

## Installation

### Step 1:

Clone the project below:

```
# Using ssh
git clone git@github.com:pindarjimenez/SME-test-project.git
```
Or
```
# Using https
git clone https://github.com/pindarjimenez/SME-test-project.git
```

### Step 2:

Install all the dependencies by executing below commands:

```
composer install
```

And

```
npm install
```

Make sure .env file is modified for mysql connection
- copy `.env.example` to `.env`

```
# MySQL host in .env file should be modified so that you can utilize mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ibventur
DB_USERNAME=root
DB_PASSWORD=
```

## Usage
So doing that just execute below in your project directory

```
# You can execute npm run watch so that you don't need to re-execute npm run dev
npm run watch
```

```
Run migration file after creating database
php artisan migrate

If cannot detect the database run
php artisan config:cache
```

```
Generate key
php artisan key:generate
composer dump-autoload
```

### Visit
```
http://localhost
```

or

```
http://localhost:8000
```

## Mailtrap Account
```
- Username: darkeninnovation@gmail.com
- Password: Secret123
```

## Excel Format Output Example
- GO: https://drive.google.com/file/d/1Us1acyS8vyMIG-eMNUkxmI-LxAjlDj4t/view?usp=sharing
- NO GO: https://drive.google.com/file/d/1All6cEcJoGngk2EPqHYdorGwZT61vTkT/view?usp=sharing


## Screencast
- https://www.loom.com/share/e59172e5907a44eb961f17560aa4078c

## License
Copyright © 2021, [Pindar Jimenez Jr]