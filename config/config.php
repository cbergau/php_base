<?php
declare(strict_types=1);

return [
    'settings' => [
        'addContentLengthHeader' => false
    ],
    'displayErrorDetails' => true,
    \Bergau\Math::class => function ($c) {
        return new \Bergau\Math();
    }
];
