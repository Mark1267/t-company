<?php

return [
    'site' => [
        'name' => "Tesla Energy Company",
        'address' => [
            'full' => "65 Shearsmith Tower Cable Street London E1 8HT",
            'box' => 'E1 8HT',
            'town' => 'Hindmarsh Cl',
            'region' => 'San Francisco',
            'street' => '65 Shearsmith Tower Cable Street',
            'country' => [
                'full' => 'United States',
                'abbr' => 'USA'
            ]
        ],
        'phone' => ['+447780783025', '+447780783025'],
        'socials' => [
            'whatsapp' => [
                'phone' => '+447780783025',
                'link' => 'https://api.whatsapp.com/send?phone=447780783025&text=' . urlencode('Hello, I want to invest in Ocean Mining Prime')
            ]
        ],
        'email' => [
            'info' => 'info@teslacompany.com',
            'support' => 'support@teslacompany.com',
            'admin' => 'admin@teslacompany.com',
            'mining' => 'mining@teslacompany.com',
            'investment' => 'investment@teslacompany.com',
        ],
        'logo' => [
            'favi' => 'logo/favi.png',
            'full' => 'logo/full.png',
            'text' => 'logo/text.png',
            'inverted' => [
                'favi' => 'logo/favi-2.png',
                'full' => 'logo/full-2.png',
                'text' => 'logo/text-2.png',
            ],
        ]
    ],
    'config' => [
        'coin_api_key' => 'f52198f5-a38e-48d1-a8d7-f7af1e5c63dc',
        'tido' => ''
    ]
];