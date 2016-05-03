## Laravel 5.2 Instal·lació

En Primer pas crearem un packet laravel

<pre>
 $ laravel new laravel-with-admin-lte
 $ cd laravel-with-admin-lte
</pre>

Afegim el paquet ebre-escool-ng-installer amb:

<pre>
 $ composer require insebre/ebre-escool-ng-installer
</pre>

Registrem el Service Provider editant el fitxer **config/app.php** hi ho afegim a l'array de Service Providers:

```php
/*
* Ebre-escool-ng AdminLTE template provider
 */
Insebre\EbreescoolngInstaller\Providers\EbreescoolngServiceProvider::class,
```

Per Registrar el Alias editem **config/app.php** hi ho afegim a l'array de Alias:

```php
/*
* Ebre-escool-ng AdminLTE template alias
*/
'EbreescoolngAdminlte' => Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE::class,
```

Publiquem el fitxers amb:

```php
$ php artisan vendor:publish --tag=ebreescoolngadminlte --force
```

Utilitzem el force per sobreescriure els paquets de laravel