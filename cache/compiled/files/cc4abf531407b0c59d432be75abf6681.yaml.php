<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/plugins/flex-objects/blueprints/flex-objects/home.yaml',
    'modified' => 1743068060,
    'size' => 562,
    'data' => [
        'title' => 'Home Settings',
        'description' => 'Chỉnh sửa nội dung trang chủ',
        'type' => 'flex-objects',
        'enabled' => true,
        'data' => [
            'storage' => 'file',
            'folder' => 'user/data/flex/home'
        ],
        'form' => [
            'fields' => [
                'header.hero_title' => [
                    'type' => 'text',
                    'label' => 'Tiêu đề Hero'
                ],
                'header.hero_description' => [
                    'type' => 'textarea',
                    'label' => 'Mô tả Hero'
                ],
                'header.hero_image' => [
                    'type' => 'file',
                    'label' => 'Ảnh Hero',
                    'destination' => 'user/pages/images',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ]
        ]
    ]
];
