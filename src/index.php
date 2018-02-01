<?php

// Replacement values. See 'box.json' at parent dir
$git_version      = '@git_version@';
$git_commit_long  = '@git_commit_long@';
$git_commit_short = '@git_commit_short@';
$git_tag          = '@git_tag@';
$date_build       = '@date_build@';

// Functions
function is_phar()
{
    return strlen(Phar::running()) > 0 ? true : false;
}

// Echo informations.
echo 'Hello world!' . PHP_EOL;

echo 'Git version       : ' . $git_version      . PHP_EOL;
echo 'Git commit(long)  : ' . $git_commit_long  . PHP_EOL;
echo 'Git commit(short) : ' . $git_commit_short . PHP_EOL;
echo 'Git tag           : ' . $git_tag          . PHP_EOL;
echo 'Date build        : ' . $date_build       . PHP_EOL;

if (! is_phar()) {
    echo 'Running           : PHP directly' . PHP_EOL;
} else {
    echo 'Running           : via phar' . PHP_EOL;
}

echo 'Path to __FILE__ is   : ' . PHP_EOL;
echo "\t" . __FILE__ . PHP_EOL;

echo 'Path Phar::running is : ' . PHP_EOL;
echo "\t" . Phar::running() . PHP_EOL;

