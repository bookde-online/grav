<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/user/pages/01.home/modular.vi.md',
    'modified' => 1742897693,
    'size' => 239,
    'data' => [
        'header' => [
            'title' => 'Trang chủ',
            'template' => 'vi/home',
            'body_classes' => 'modular header-image fullwidth',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_carousel',
                        1 => '_about'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'Trang chủ\'
template: vi/home
body_classes: "modular header-image fullwidth"

content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _carousel
            - _about',
        'markdown' => ''
    ]
];
