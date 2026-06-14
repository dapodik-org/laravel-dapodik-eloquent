# Dapodik Eloquent for Laravel Framework

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dapodik-org/laravel-dapodik-eloquent.svg?style=flat-square)](https://packagist.org/packages/dapodik-org/laravel-dapodik-eloquent)
[![GitHub Tests Action Status](https://github.com/dapodik-org/laravel-dapodik-eloquent/actions/workflows/run-tests.yml/badge.svg)](https://github.com/dapodik-org/laravel-dapodik-eloquent/actions/workflows/run-tests.yml)
[![GitHub Code Style Action Status](https://github.com/dapodik-org/laravel-dapodik-eloquent/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/dapodik-org/laravel-dapodik-eloquent/actions/workflows/fix-php-code-style-issues.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/dapodik-org/laravel-dapodik-eloquent.svg?style=flat-square)](https://packagist.org/packages/dapodik-org/laravel-dapodik-eloquent)

Paket ini menyediakan model Eloquent Dapodik yang siap digunakan di aplikasi Laravel Anda. Termasuk konfigurasi model, migrasi, dan command untuk menerbitkan model ke dalam folder aplikasi.

## Installation

Install package lewat Composer:

```bash
composer require dapodik-org/laravel-dapodik-eloquent
```

## Publish

Publish migrasi dan jalankan:

```bash
php artisan vendor:publish --tag="dapodik-eloquent-migrations"
php artisan migrate
```

Publish file konfigurasi:

```bash
php artisan vendor:publish --tag="dapodik-eloquent-config"
```

Publish model package ke aplikasi Anda:

```bash
php artisan dapodik:eloquent-publish
```

Untuk publish satu model saja, gunakan nama model (key) seperti `agama`:

```bash
php artisan dapodik:eloquent-publish agama
```

Command ini akan menyalin seluruh folder `src/Models/Rest` dari package ke `app/Models/Dapodik`, dan mengubah namespace model menjadi `App\Models\Dapodik\...`.

Ini adalah contoh isi file konfigurasi yang dapat dipublish:

```php
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\LevelWilayah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Negara;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\KategoriDesa;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\MstWilayah;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Agama;

return [
    /*
     * Prefix Table
     */
    'prefix' => env('DAPODIK_ELOQUENT_PREFIX', 'dapodik'),

    /*
     * Suffix Table
     */
    'suffix' => env('DAPODIK_ELOQUENT_SUFFIX', null),

    /*
     * Multi Connection Database
     */
    'multi_connection' => env('DAPODIK_ELOQUENT_MULTI_CONNECTION', false),
    
    /*
     * Custom Models
     */
    'models' => [
        'ref' => [
            'level_wilayah' => LevelWilayah::class,
            'negara' => Negara::class,
            'kategori_desa' => KategoriDesa::class,
            'mst_wilayah' => MstWilayah::class,
            'agama' => Agama::class,
            // more..
        ],
    ],
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dapodik Org](https://github.com/dapodik-org)
- [Ade Reksi Susanto](https://github.com/adereksisusanto)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
