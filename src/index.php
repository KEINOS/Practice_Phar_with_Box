<?php

// Replacement values. See 'box.json' at parent dir
$git_version   = '@git_versionz@';
$git_commit_id = '@git_commit_id@';
$git_tag_id    = '@git_tag_id@';
$date_build    = '@date_build@';

echo 'Hello world!' . PHP_EOL;

echo 'Git version   : ' . $git_version   . PHP_EOL;
echo 'Git commit ID : ' . $git_commit_id . PHP_EOL;
echo 'Git tag ID    : ' . $git_tag_id    . PHP_EOL;
echo 'Date build    : ' . $date_build    . PHP_EOL;
