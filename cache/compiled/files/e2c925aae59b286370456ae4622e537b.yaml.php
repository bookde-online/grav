<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/google-analytics/blueprints.yaml',
    'modified' => 1647312584,
    'size' => 3961,
    'data' => [
        'name' => 'Google Analytics (gtag.js)',
        'version' => '1.1.0',
        'description' => 'Easily integrate and configure Google Analytics in your site with the global site tag (gtag.js) framework and API.',
        'icon' => 'google',
        'author' => [
            'name' => 'Christian Worreschk',
            'email' => 'cw@marsec.de'
        ],
        'homepage' => 'https://github.com/cworreschk/grav-plugin-google-analytics',
        'keywords' => 'google, tracking, analytics, gtag, global site tag, grav, plugin',
        'bugs' => 'https://github.com/cworreschk/grav-plugin-google-analytics/issues',
        'docs' => 'https://github.com/cworreschk/grav-plugin-google-analytics/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'tracking_id' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.TACKING_ID',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.TACKING_ID_HELP',
                    'placeholder' => 'UA-00000000-1',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'advanced' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_GOOGLE_ANALYTICS.SECTION_ADVANCED',
                    'underline' => true
                ],
                'object_name' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.OBJECT_NAME',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.OBJECT_NAME_HELP',
                    'size' => 'small',
                    'placeholder' => 'gtag'
                ],
                'advertising_features' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.ADVERTISING_FEATURES',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.ADVERTISING_FEATURES_HELP',
                    'hightlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'blocked_ips' => [
                    'type' => 'array',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.BLOCKED_IPS',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.BLOCKED_IPS_HELP',
                    'value_only' => true,
                    'placeholder_value' => '255.0.0.0'
                ],
                'privacy' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_GOOGLE_ANALYTICS.PRIVACY',
                    'underline' => true
                ],
                'anonymize_ip' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.ANONYMIZE_IP',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.ANONYMIZE_IP_HELP',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'do_not_track' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.DO_NOT_TRACK',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.DO_NOT_TRACK_HELP',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'opt_out' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.OPT_OUT',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.OPT_OUT_HELP',
                    'description' => 'PLUGIN_GOOGLE_ANALYTICS.OPT_OUT_DESCRIPTION',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cookie' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_GOOGLE_ANALYTICS.SECTION_COOKIE',
                    'underline' => true
                ],
                'cookie_domain' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_DOMAIN',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_DOMAIN_HELP',
                    'size' => 'small',
                    'placeholder' => 'blog.example.com'
                ],
                'cookie_expires' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_EXPIRATION',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_EXPIRATION_HELP',
                    'append' => 'PLUGIN_GOOGLE_ANALYTICS.SECONDS',
                    'placeholder' => 63072000,
                    'validate' => [
                        'type' => 'number'
                    ]
                ],
                'cookie_prefix' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_PREFIX',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_PREFIX_HELP',
                    'size' => 'small',
                    'placeholder' => '_ga'
                ],
                'cookie_update' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_UPDATE',
                    'help' => 'PLUGIN_GOOGLE_ANALYTICS.COOKIE_UPDATE_HELP',
                    'hightlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
