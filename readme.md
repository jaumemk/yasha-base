<h1 align="center">
Яша / Yasha Base
</h1>

<p align="center">
    <i>Speedup development stack</i>
</p>

## About Yasha's Base

This i a multipourpose bootstrap / laravel / backpack stack base to speedup install and developments.
In a matter of minutes and with a single command we deploy all our local development tools that we always need to start coding. 

## Turnkey command (single command install)

`composer create-project yasha/yasha-base {project-name} {dev-[branch] or tag}`

Installing is as simple as running this command in the Host where we're developing our code.

The command __should__ run in a working environement with `php` & `mysql`, otherwise *composer* will fail at the end and we'll need to run the comands listed below in the *What create-project does* section.

__Dont forget to `git init` and push your first commit with the project. This is no a `git clone`.__

#### Examples

- `composer create-project yasha/yasha-base project-zero 1.0.0`
- `composer create-project yasha/yasha-base project-one dev-master`
- `composer create-project yasha/yasha-base project-two dev-develop`

__Warning__: this package `yasha/yasha-base-backend`, listed in *composer.json* in produnction environements __should be fixed__ to a stable version (Eg: "1.0.4"). For now we keep in in `dev-develop@dev`.

## Whats included in this *base*

For now there is a unique backend package, which acts as a meta-package with all dependencies listed below. Frontend developments are not aside packaged. Maybe in a near future they should.

#### Dependencies

- "backpack/crud": "^3.6",
- "mcamara/laravel-localization": "^1.3",
- "imliam/laravel-env-set-command": "^1.0.0"

## What create-project does

This create-project takes care with the following actions running the following commands:

- Like any other Laravel, generates a key.
    - `php artisan key:generate --ansi`


- Sets and creates the database based on {project-name}. Notice "-" (dash) is converted to "_".
    - `php artisan env:set DB_DATABASE $(echo ${PWD##*/} | tr - _)_test`
    - `php artisan db:create $(echo ${PWD##*/} | tr - _)_test`


- Installs Backpack with everything & creates first user with the account: *admin@example.com*
    - `php artisan backpack:base:install`
    - `php artisan migrate --seed`
    - `php artisan backpack:crud:install --elfinder=yes`

- The first user password is hashed in the seeder. (To do: an artisan command to set the admin password).

## Coming in next releases

- Basic route translations
- Install clockwork for debuging pourposes
- to do...