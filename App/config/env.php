<?php

return [
    'host'     => getenv('DB_HOST') ?: 'localhost',
    'port'     => getenv('DB_PORT') ?: '5432',
    'dbname'   => getenv('DB_DATABASE') ?: 'appdafdb',
    'username' => getenv('DB_USERNAME') ?: 'appdaf',
    'password' => getenv('DB_PASSWORD') ?: 'password',
];
