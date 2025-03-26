<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/config/plugins/flex-objects.yaml',
    'modified' => 1742885192,
    'size' => 669,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'directories' => [
            0 => 'blueprints://flex-objects/contacts.yaml',
            1 => 'blueprints://flex-objects/hero-carousel.yaml',
            2 => 'blueprints://flex-objects/pages.yaml',
            3 => 'blueprints://flex-objects/user-accounts.yaml',
            4 => 'blueprints://flex-objects/user-groups.yaml'
        ]
    ]
];
