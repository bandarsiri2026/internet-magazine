# Internet Magazine

A Laravel (PHP) magazine / e-commerce style website with a Voyager admin panel, category & item browsing, ordering pages, contact form and mail sending.

## Stack

- **Laravel 5.4** (`internet-magazine/`)
- **Voyager** `^0.11.14` — admin CMS at `/admin`
- **Laravel Scout + Algolia** — search
- **laravelcollective/html**, **5dmatwebsearch/advancesearch**
- **MySQL / MariaDB** — schema dump included as `magazine (1).sql`

## Repository layout

```
.
├── internet-magazine/     # Laravel application
│   ├── app/               # Models, controllers, mail, providers
│   ├── resources/views/   # Blade templates
│   ├── public/            # css, js, images, assets
│   ├── routes/web.php     # Public + Voyager admin routes
│   └── storage/app/public/# Uploaded images (categories, items, posts...)
├── magazine (1).sql       # phpMyAdmin export of the `magazine` database
└── README.md
```

## Setup

```bash
cd internet-magazine
composer install
cp .env.example .env
php artisan key:generate
```

Create the database and import the dump:

```bash
mysql -u root -e "CREATE DATABASE IF NOT EXISTS \`internet-magazin\` CHARACTER SET utf8mb4;"
mysql -u root internet-magazin < "../magazine (1).sql"
php artisan migrate
php artisan serve   # http://localhost:8000  (admin: /admin)
```

## Notes

- `.env` is **not** committed (it contains local DB and Mailtrap credentials); use `.env.example` as the template.
- `vendor/`, `node_modules/`, editor files and Laravel cache/log folders are ignored by git.
