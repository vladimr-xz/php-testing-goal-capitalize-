<?php

require_once("src/StringUtils.php");

if (StringUtils\capitilize('hello') !== 'Hello') {
    throw new \Exception("Функция работает неправильно");
}

if (StringUtils\capitilize('') !== '') {
    throw new \Exception("Функция работает неправильно");
}

echo 'Все тесты пройдены, дай краба';
