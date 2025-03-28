<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://flex-objects/flex-objects.yaml',
    'modified' => 1743068073,
    'size' => 504,
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
            'pages' => 'blueprints://flex-objects/pages.yaml',
            'user-accounts' => 'blueprints://flex-objects/user-accounts.yaml',
            'user-groups' => 'blueprints://flex-objects/user-groups.yaml',
            'home' => [
                'title' => 'Home Settings',
                'description' => 'Quản lý nội dung trang chủ',
                'type' => 'user',
                'folder' => 'home',
                'blueprint' => 'flex-objects/home.yaml'
            ]
        ]
    ]
];
