<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/user/pages/01.home/01._hero/hero.en.md',
    'modified' => 1743676394,
    'size' => 1017,
    'data' => [
        'storage_key' => '01.home/01._hero|hero.en',
        'header' => [
            'title' => 'Hero Section',
            'template' => 'modular/hero',
            'banners' => [
                0 => [
                    'title' => 'Your Brand',
                    'subtitle' => 'Create Your Own Hotel Booking Website',
                    'button_text' => 'Contact',
                    'button_link' => 'http://localhost:8080/grav/contact',
                    'image' => [
                        'banner1.webp' => [
                            'name' => 'banner1.webp',
                            'type' => 'image/webp',
                            'size' => 189152,
                            'path' => 'banner1.webp'
                        ]
                    ]
                ],
                1 => [
                    'title' => 'Your Domain',
                    'subtitle' => 'Full Control With Custom Website – No Sharing',
                    'button_text' => NULL,
                    'button_link' => NULL,
                    'image' => [
                        'banner2.webp' => [
                            'name' => 'banner2.webp',
                            'type' => 'image/webp',
                            'size' => 777834,
                            'path' => 'banner2.webp'
                        ]
                    ]
                ],
                2 => [
                    'title' => NULL,
                    'subtitle' => NULL,
                    'button_text' => NULL,
                    'button_link' => NULL,
                    'image' => [
                        'banner3.webp' => [
                            'name' => 'banner3.webp',
                            'type' => 'image/webp',
                            'size' => 234584,
                            'path' => 'banner3.webp'
                        ]
                    ]
                ]
            ]
        ],
        'root' => false,
        'frontmatter' => 'title: \'Hero Section\'
template: modular/hero
banners:
    -
        title: \'Your Brand\'
        subtitle: \'Create Your Own Hotel Booking Website\'
        button_text: \'Liên hệ\'
        button_link: \'http://localhost:8080/grav/contact\'
        image:
            banner1.webp:
                name: banner1.webp
                type: image/webp
                size: 189152
                path: banner1.webp
    -
        title: \'Your Domain\'
        subtitle: \'Full Control With Custom Website – No Sharing\'
        button_text: null
        button_link: null
        image:
            banner2.webp:
                name: banner2.webp
                type: image/webp
                size: 777834
                path: banner2.webp
    -
        title: null
        subtitle: null
        button_text: null
        button_link: null
        image:
            banner3.webp:
                name: banner3.webp
                type: image/webp
                size: 234584
                path: banner3.webp',
        'slug' => '_hero',
        'route' => '/home',
        'name' => 'hero.en.md',
        'ordering' => true
    ]
];
