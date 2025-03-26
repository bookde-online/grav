<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/themes/bootstrap/blueprints.yaml',
    'modified' => 1742886733,
    'size' => 780,
    'data' => [
        'name' => 'Bootstrap',
        'slug' => 'bootstrap',
        'type' => 'theme',
        'version' => '1.7.1',
        'description' => 'Bootstrap is built using the popular **Bootstrap** Framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-bootstrap',
        'demo' => 'http://demo.getgrav.org/bootstrap-skeleton/',
        'keywords' => 'bootstrap, theme, framework',
        'bugs' => 'https://github.com/getgrav/grav-theme-bootstrap/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'bootstrapper'
            ],
            1 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
