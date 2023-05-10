<?php

http_response_code($code);

$message = match ($code) {
    403 => $title = 'Forbidden',
    404 => $title = 'Page Not Found',
    500 => $title = 'Internal Server Error',
    default => $title = 'Error',
};

$title = "{$code} - {$message}";

require 'views/404.view.php';