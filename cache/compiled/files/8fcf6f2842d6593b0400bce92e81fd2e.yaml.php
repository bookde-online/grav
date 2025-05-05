<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/themes/quark/blueprints/pricing.yaml',
    'modified' => 1743670465,
    'size' => 1773,
    'data' => [
        'title' => 'Hotel Demo Page',
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
                                    'label' => 'Tiêu đề chính'
                                ],
                                'header.pricing_plans' => [
                                    'type' => 'list',
                                    'label' => 'Gói giá cả',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'Tên gói'
                                        ],
                                        '.price' => [
                                            'type' => 'text',
                                            'label' => 'Giá'
                                        ],
                                        '.currency_unit' => [
                                            'type' => 'text',
                                            'label' => 'Đơn vị giá'
                                        ],
                                        '.duration' => [
                                            'type' => 'text',
                                            'label' => 'Thời gian áp dụng'
                                        ],
                                        '.features_title' => [
                                            'type' => 'text',
                                            'label' => 'Tiêu đề danh sách tính năng'
                                        ],
                                        '.features' => [
                                            'type' => 'list',
                                            'label' => 'Danh sách tính năng',
                                            'fields' => [
                                                '.icon' => [
                                                    'type' => 'select',
                                                    'label' => 'Biểu tượng',
                                                    'options' => [
                                                        'bi bi-check' => 'Yes',
                                                        'bi bi-x' => 'No'
                                                    ],
                                                    'default' => 'bi bi-check'
                                                ],
                                                '.text' => [
                                                    'type' => 'editor',
                                                    'label' => 'Nội dung tính năng'
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
    ]
];
