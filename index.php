<?php

declare(strict_types=1);

function dump(array $value): void
{
    echo '<div style="padding: 20px; background: #ddd;"><pre>';
    print_r($value);
    echo '</pre></div>';
}
