<?php

return [
    'navigation' => [
        /**
         * @deprecated 3.2
         */
        'group' => [
            'token' => 'User',
        ],
        'token' => [
            'group' => 'User',
            'sort' => -1,
            'icon' => 'heroicon-o-key',
        ],
    ],
    'models' => [
        'token' => [
            'enable_policy' => true,
        ],
    ],
    'route' => [
        'panel_prefix' => true,
        'use_resource_middlewares' => false,
    ],
    'tenancy' => [
        'enabled'   => false,
        'awareness' => false,
    ]
];
