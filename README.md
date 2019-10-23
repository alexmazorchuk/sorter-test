Sorter Test
===========

This is a test sorting library for PHP.

Installation
------------

For using this library run execute the following command

```bash
$ composer require alexmazorchuk/sorter-test
```

Usage
-----

```php
<?php

use Alexmazorchuk\Sorter;
use Alexmazorchuk\Sorter\Strategy\AscSort;
use Alexmazorchuk\Sorter\Strategy\DescSort;
use Alexmazorchuk\Sorter\Strategy\NullObject;

$ascSort = new Sorter(new AscSort());
$descSort = new Sorter(new DescSort());
$nullSort = new Sorter(new NullObject());


$ascSortArray = $ascSort->sort($testArray);
$descSortArray = $descSort->sort($testArray);

// NullSorter
$array = $nullSort->sort($testArray); 
```

Code style fixer
----------------

To check the code style just run the following command


```bash
$ composer cs-check
```


to fix the code style run next command

```bash
$ composer cs-fix
```

License
-------

[![license](https://img.shields.io/github/license/alexmazorchuk/sorter-test.svg)](LICENSE)

This library is released under the terms of the MIT [license](LICENSE).

Copyright (c) 2019, Alex
