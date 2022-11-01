<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

function dump(array $value): void
{
    echo '<div style="padding: 20px; background: #ddd;"><pre>';
    print_r($value);
    echo '</pre></div>';
}