<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/bookdevn/user/pages/04.blog/blog.vi.md',
    'modified' => 1747038094,
    'size' => 382,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'metadata' => [
                'description' => 'Bookde Blog - Tin tức mới nhất về Bookde',
                'keywords' => 'Bookde, Đặt phòng khách sạn, Bookde Blog , BookDe Tin tức'
            ],
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 10,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'sitemap' => [
                'lastmod' => '12-05-2025 15:21'
            ]
        ],
        'frontmatter' => 'title: Blog
metadata:
    description: \'Bookde Blog - Tin tức mới nhất về Bookde\'
    keywords: \'Bookde, Đặt phòng khách sạn, Bookde Blog , BookDe Tin tức\'
content:
    items:
        - \'@self.children\'
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true
    url_taxonomy_filters: true
sitemap:
    lastmod: \'12-05-2025 15:21\'',
        'markdown' => ''
    ]
];
