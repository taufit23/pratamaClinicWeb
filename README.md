# Sistem informasi klinik

## Table of Contents

- [tentang](#tentang)
- [Usage](#usage)

## Tentang <a name="tentang"></a>

Project dibuat dengan framework laravel 9 + inertia js + vue js + tailwindCss

**Projcet Start** date 16 Oktober 2022
**Projcet End** Prosess

### Prerequisites

```
PHP 8.1.6 (cli)
```
```
NodeJs v16.17.0
```
```
Npm v16.17.0
```
```
Laravel 9.1*
```
```
Mysql
```


### Installing

Langkah cloning

Clone dari link github

```
git clone https://github.com/taufit23/pratamaClinicWeb
```

Masuk directory project

```
cd pratamaClinicWeb
```

Install vendor laravel 9

```
composer install
```

Copy .env.example ke .env

```
cp .env.example .env
```

Buat database di mysql

```
pratamaclinicweb
```


Generate Key laravel

```
php artisan key:generate
```

Migrasi database

```
php artisan migrate:fresh
```

Install dependecy

```
npm install
```

Jalankan development

```
npm run dev
```

Jalankan server laravel

```
php artisan serve
```
## Usage <a name="usage"></a>

Kunjungi menggukan browser
```
http://localhost:8000/
```
Or
```
http://127.0.0.1:8000/
```