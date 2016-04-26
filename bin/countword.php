<?php

require __DIR__ . '/../vendor/autoload.php';

$command = new \Vehsa\UniqueWordsCounter\CountWordsCommand();

$application = new Vehsa\UniqueWordsCounter\Application($argv);
$application->run($command);
