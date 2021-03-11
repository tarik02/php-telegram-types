<?php

use Tarik02\TelegramTypesGenerator\TypesGenerator;

set_error_handler(function ($severity, $message, $file, $line) {
  throw new \ErrorException($message, $severity, $severity, $file, $line);
});

require __DIR__ . '/../vendor/autoload.php';

$composerJson = json_decode(
    file_get_contents(__DIR__ . '/../composer.json'),
    true
);

$apiDataUrl = sprintf(
    $composerJson['extra']['telegram-api']['template'],
    $composerJson['extra']['telegram-api']['version']
);

echo 'Loading api data from ', $apiDataUrl, '...', PHP_EOL;

$apiData = json_decode(
    file_get_contents($apiDataUrl),
    true
);

$outputDir = __DIR__ . '/../src';

if (is_dir($outputDir)) {
    system('rm -r ' . $outputDir);
}

$generator = new TypesGenerator(
    $apiData,
    $outputDir
);

echo 'Generating sources...', PHP_EOL;

$generator->generate();

echo 'Done!', PHP_EOL;
