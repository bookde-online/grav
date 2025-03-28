<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/user/pages/01.home/03._services/services.vi.md',
    'modified' => 1743048294,
    'size' => 433,
    'data' => [
        'header' => [
            'title' => 'Nâng cao khách sạn trực tuyến',
            'menu' => 'Dịch vụ',
            'visible' => false,
            'content' => [
                'items' => '@self.children'
            ]
        ],
        'frontmatter' => 'title: \'Nâng cao khách sạn trực tuyến\'
menu: \'Dịch vụ\'
visible: false
content:
    items: \'@self.children\'',
        'markdown' => '<div class="row gy-4">
<h2 class="inner-title"><b>Nâng cao dịch vụ trực tuyến của khách sạn</b></h2>
{% set services = page.children %}
{% for service in services %}
{{ service.content|raw }}
{% endfor %}
</div><hr>
<h3>Ra mắt trang web đặt phòng của riêng bạn ngay hôm nay!</h3>'
    ]
];
