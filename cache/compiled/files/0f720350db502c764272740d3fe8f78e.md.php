<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/user/pages/05.blog/blog.en.md',
    'modified' => 1743671429,
    'size' => 281,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 6,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'media_order' => 'banner1.webp,banner2.webp',
            'hero_classes' => 'overlay-dark-gradient',
            'hero_image' => 'banner1.webp'
        ],
        'frontmatter' => 'title: Blog
content:
    items:
        - \'@self.children\'
    order:
        by: date
        dir: desc
    limit: 6
    pagination: true
    url_taxonomy_filters: true
media_order: \'banner1.webp,banner2.webp\'
hero_classes: overlay-dark-gradient
hero_image: banner1.webp',
        'markdown' => ''
    ]
];
