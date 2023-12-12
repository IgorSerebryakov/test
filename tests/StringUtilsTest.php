<?php

require_once '../src/StringUtils.php';

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function StringUtils\capitalize;

use Webmozart\Assert\Assert;

Assert::eq(capitalize(''), '');

Assert::eq(capitalize('hello'), 'Hello');

echo 'Все тесты пройдены!';

