<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/themes/quark/blueprints/modular/hero.yaml',
    'modified' => 1743654193,
    'size' => 1644,
    'data' => [
        'title' => 'Hero Section',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Nội dung chính',
                            'fields' => [
                                'header.banners' => [
                                    'type' => 'list',
                                    'label' => 'Danh sách Banner',
                                    'style' => 'vertical',
                                    'validate' => [
                                        'required' => false
                                    ],
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Tiêu đề',
                                            'validate' => [
                                                'required' => false
                                            ]
                                        ],
                                        '.subtitle' => [
                                            'type' => 'text',
                                            'label' => 'Phụ đề',
                                            'validate' => [
                                                'required' => false
                                            ]
                                        ],
                                        '.button_text' => [
                                            'type' => 'text',
                                            'label' => 'Văn bản nút',
                                            'placeholder' => 'Xem thêm',
                                            'validate' => [
                                                'required' => false
                                            ]
                                        ],
                                        '.button_link' => [
                                            'type' => 'text',
                                            'label' => 'Liên kết nút',
                                            'placeholder' => '#',
                                            'validate' => [
                                                'required' => false
                                            ]
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Hình ảnh',
                                            'multiple' => false,
                                            'destination' => 'self@',
                                            'validate' => [
                                                'required' => false
                                            ],
                                            'accept' => [
                                                0 => 'image/jpeg',
                                                1 => 'image/png',
                                                2 => 'image/webp',
                                                3 => 'image/avif',
                                                4 => 'image/gif',
                                                5 => 'image/svg+xml'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
