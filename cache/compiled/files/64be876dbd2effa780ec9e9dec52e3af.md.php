<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/user/pages/05.blog/blog.vi.md',
    'modified' => 1746417498,
    'size' => 179,
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
            ]
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
    url_taxonomy_filters: true',
        'markdown' => ''
    ]
];
