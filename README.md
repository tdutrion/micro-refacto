Refactor
--------

The code to refactor goes as follow:

```php
$name_pdf = ['test', 'demo', 1];
$nom = '';
for ($j = 0; $j < count($name_pdf); $j++) {
    if ($nom == "") {
        $nom = $name_pdf[$j];
    } else {
        $nom = $name_pdf[$j]. '-' . $nom;
    }
}
var_dump('1-test-demo' === $nom); // true
```

To test the existing code, use `./phpunit .` (considering at least php 7.4).

You can refactor `Script` and try again.

To try it, run the following docker command from the current folder:

```
docker run --rm -w /code -v $(pwd):/code php:7.4-cli-alpine ./phpunit .
```
