<h1 align="center">
Яша / Yasha Base
</h1>

<p align="center">
    <i>Speedup development stack</i>
</p>

<pre align="center">
composer create-project yasha/yasha-base project-zero
</pre>

## About Yasha's Base

This i a multipourpose bootstrap / laravel / backpack stack base to speedup install and developments.
In a matter of minutes and with a single command we deploy all our local development tools that we always need to start coding. 

## Turnkey command (single command install)

`composer create-project yasha/yasha-base {project-name} {dev-[branch] or tag}`

Installing is as simple as running this command in the Host where we're developing our code.

The command __should__ run in a working environement with `php` & `mysql`, otherwise *composer* will fail at the end and we'll need to run the comands listed below in the *What create-project does* section.

__Dont forget to `git init` and push your first commit with the project. This is not a `git clone`.__

### Considerations

#### Examples

- `composer create-project yasha/yasha-base project-one dev-master`
- `composer create-project yasha/yasha-base project-two dev-develop`

__Warning__: this package `yasha/yasha-base-backend`, listed in *composer.json* in produnction environements __should be fixed__ to a stable version (Eg: "1.0.4"). For now we keep in in `dev-develop@dev` while package is in development status (<- todo).

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


- Installs Backpack with everything & creates first user with the account: *info@example.com*
    - `php artisan backpack:base:install`
    - `php artisan migrate --seed`
    - `php artisan backpack:crud:install --elfinder=yes`

- The first user password is hashed in `composer.json` file.

## Coming features in next releases

- Add some user administration & permissions
- Add image compression cached/on the fly, based on URL (eg: /image/thumb/image.png, /image/big/image.png, etc.) Check those libs: http://image.intervention.io, https://docs.spatie.be/laravel-medialibrary/.
- Improve/develop deployment script & make a configuration in PHP/.env to change default folder from "public" to "public_html". 

## Known bugs to fix in next releases & important improvements

- Removing a Page which is linked trough a Menu Item makes all web unaccessible until the Menu Item its removed.
- Page preview button doesn't work as expected when backend/frontend language is not the same.
- Backend language switcher fails on some controllers.
- Add Admin user to Seeders because when refreshing user admin is lost. (Remove it from composer?)
- Check loguin route, for both controllers: frontend and backend. (Look at the Middelware).
- Make a request for base fields or convert them to required.