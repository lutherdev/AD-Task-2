<?php
define('BASE_PATH', realpath(__DIR__));

chdir(BASE_PATH);

define('BASE_URL', ($_SERVER['HTTP_HOST'] ?? '') === 'localhost' ? '/AD-Task-2' : '');
