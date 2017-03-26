# RDS Rosbank Hackathon

## Installation
### step 1

```
    git clone ...
```

### step 2 

```
    composer install 
```

### step 3 
add .env file, example 

```
    APP_ENV=local
APP_KEY=base64:OxVTajfTR76+rxW4FUtVE2ruVlzL9YqmSop0S9ki5bI=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

```

### step 4
run db migrations

```
    php artisan migrate
```
### step 5
install dependencies

```
    yarn
```

### step 6
build static files

```
    npm run build
```
