<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;

use function StringUtils\capitilize;


// if (StringUtils\capitilize('hello') !== 'Hello') {
//     throw new \Exception("Функция работает неправильно");
// }

// if (StringUtils\capitilize('') !== '') {
//     throw new \Exception("Функция работает неправильно");
// }

Assert::eq(capitilize('hello'), 'Hello');

Assert::eq(capitilize(''), '');

echo 'Все тесты пройдены, дай краба';
