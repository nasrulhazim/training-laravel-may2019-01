## Day 2

- [x] users
- [x] profiles
	- [x] gender
	- [x] dob
	- [x] race
	- [x] religion

```
$ php artisan make:model Profile -a
```

This will create:

- Controller 
- Model
- Factory
- Migration

Then Setup Route:

```php
// routes/web.php
Route::resource('profiles', 'ProfileController');
```

Create Seeder:

```
$ php artisan make:seeder DevelopmentSeeder
```

Seed specific seeder class:

```
$ php artisan db:seed --class=DevelopmentSeeder
```
