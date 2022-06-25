# Laravel Starter Template

![image](https://user-images.githubusercontent.com/5357529/175783812-676139f7-6771-47f6-9905-205c2a4d2a67.png)
![image](https://user-images.githubusercontent.com/5357529/175783862-64ed6216-e9b1-4718-a03d-4b12756d964a.png)

![Issues](https://img.shields.io/github/issues/Gruce/laravel-starter-template)
![Forks](https://img.shields.io/github/forks/Gruce/laravel-starter-template)
![Stars](https://img.shields.io/github/stars/Gruce/laravel-starter-template)
![License](https://img.shields.io/github/license/Gruce/laravel-starter-template)
![Contribs](https://img.shields.io/github/contributors/Gruce/laravel-starter-template)
![LastCommit](https://img.shields.io/github/last-commit/Gruce/laravel-starter-template)

This template for Laravel Framework contains many packages that help in creating web applications

---


### 1. Add Remote To Your Repo
```
git remote add template https://github.com/Gruce/laravel-starter-template.git
git fetch --all
git merge template/master
```

### 2. Run Project
```
Copy .env.example Paste in in root directory and rename to .env
make database
composer install
php artisan key:generate
php artisan jwt:secret
php artisan reset
```

---


## Packages and Libraries Included

※ [Laravel Jetstream](https://jetstream.laravel.com/)

※ [Laravel JWT](https://jwt-auth.readthedocs.io)

※ [Laravel livewire](https://laravel-livewire.com)

※ [Livewire Charts](https://github.com/asantibanez/livewire-charts)

※ [Livewire Alert](https://livewire-alert.jantinnerezo.com)

※ [Laravel PWA](https://github.com/silviolleite/laravel-pwa)

※ [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)

※ [Laravel Money](https://github.com/akaunting/laravel-money)

※ [Laravel Backup](https://github.com/spatie/laravel-backup)

※ [Laravel eloquent-eager-limit](https://github.com/staudenmeir/eloquent-eager-limit)

※ [Alpine JS](https://alpinejs.dev)

※ [TailwindCSS](https://tailwindcss.com) 

※ [Flowbite](https://flowbite.com)

※ [Fontawesome](https://fontawesome.com)


---


## Commands Includes
### 1. Reset
```
php artisan reset
```
- Reset database
- Migrate database
- Seed database
- Optimize

### 2. IP
```
php artisan ip
```
- Start the server on the specified port


---


## Middlewares

### 1. Admin
```
Route::get('/', function () {
    return view('welcome');
})->middleware('admin');
```

---

## Seeders

### 1. UserSeeder
#### 2. Admin
```
Email: admin@gmail.com
Password: 123456
```
#### 2. User
```
Email: user@gmail.com
Password 123456
```

---

## Languages Include
#### 1. English
#### 2. Arabic






