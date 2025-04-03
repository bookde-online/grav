<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/themes/quark/blueprints/modular/config.yaml',
    'modified' => 1743675986,
    'size' => 2899,
    'data' => [
        'title' => 'Config',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'label' => 'Tên website'
                                ],
                                'header.image' => [
                                    'type' => 'file',
                                    'label' => 'Logo',
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
                                ],
                                'header.favicon' => [
                                    'type' => 'file',
                                    'label' => 'Favicon',
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
                                ],
                                'header.name' => [
                                    'type' => 'text',
                                    'label' => 'Tên công ty'
                                ],
                                'header.phone' => [
                                    'type' => 'text',
                                    'label' => 'Số điện thoại'
                                ],
                                'header.email' => [
                                    'type' => 'email',
                                    'label' => 'Email'
                                ],
                                'header.address' => [
                                    'type' => 'text',
                                    'label' => 'Địa chỉ'
                                ],
                                'header.social' => [
                                    'type' => 'list',
                                    'label' => 'Danh sách mạng xã hội',
                                    'style' => 'vertical',
                                    'validate' => [
                                        'required' => false
                                    ],
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Mạng xã hội',
                                            'validate' => [
                                                'required' => false
                                            ]
                                        ],
                                        '.link' => [
                                            'type' => 'text',
                                            'label' => 'Link',
                                            'validate' => [
                                                'required' => false
                                            ]
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Icon mạng xã hội',
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
                                ],
                                'header.foot' => [
                                    'type' => 'editor',
                                    'label' => 'Chân trang'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
