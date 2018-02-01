<?php

// Replacement values. See 'box.json' at parent dir
$git_version      = '@git_version@';
$git_commit_long  = '@git_commit_long@';
$git_commit_short = '@git_commit_short@';
$git_tag          = '@git_tag@';
$date_build       = '@date_build@';

echo 'Hello world!' . PHP_EOL;

echo 'Git version       : ' . $git_version      . PHP_EOL;
echo 'Git commit(long)  : ' . $git_commit_long  . PHP_EOL;
echo 'Git commit(short) : ' . $git_commit_short . PHP_EOL;
echo 'Git tag           : ' . $git_tag          . PHP_EOL;
echo 'Date build        : ' . $date_build       . PHP_EOL;
