<?php

$url_installer = 'https://box-project.github.io/box2/installer.php';

if (! file_exists('./box.phar')) {
    eval(trim(file_get_contents($url_installer), '<?php'));
} else {
    echo `php ./box.phar update`;
}
