<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/themes/quark/blueprints/default.yaml',
    'modified' => 1743087862,
    'size' => 816,
    'data' => [
        'title' => 'Default',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Nội dung',
                            'fields' => [
                                'content' => [
                                    'type' => 'markdown',
                                    'label' => 'Nội dung chính',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'banner' => [
                                    'type' => 'text',
                                    'label' => 'Tiêu đề Banner'
                                ],
                                'sidebar' => [
                                    'type' => 'textarea',
                                    'label' => 'Nội dung Sidebar'
                                ],
                                'footer' => [
                                    'type' => 'editor',
                                    'label' => 'Nội dung Footer'
                                ],
                                'content1' => [
                                    'type' => 'textarea',
                                    'label' => 'Content 1'
                                ],
                                'content2' => [
                                    'type' => 'textarea',
                                    'label' => 'Content 2'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
