# apnet
 
A minimal ActivityPub network directory, powered by a curated SQLite database provided by [FediDB](https://fedidb.org)

### Installation

1) Clone the source code
```
git clone https://github.com/dansup/apnet.git
```

2) Change directory
```
cd apnet
```

3) Install composer deps
```
composer install
```

4) Copy .env file
```
cp .env.example .env
```

5) Generate app key
```
php artisan key:generate
```

6) Edit .env `DB_DATABASE` path

You need to edit this value to the full path to the sqlite database in the `storage/app/` directory
```
DB_DATABASE=/path/to/storage/app/fedidb_public.db
```

7) Optional: Start dev server
```
php artisan serve
```
Note: We don't recommend using this method in production, instead setup nginx or apache
