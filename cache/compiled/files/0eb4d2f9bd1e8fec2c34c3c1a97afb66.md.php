<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/user/pages/01.home/04._benefit/benefit.vi.md',
    'modified' => 1743051490,
    'size' => 1755,
    'data' => [
        'header' => [
            'title' => 'Lợi ích khi sử dụng dịch vụ của chúng tôi',
            'content' => [
                'items' => '@self.modular'
            ],
            'menu' => 'Lợi ích',
            'metadata' => [
                'description' => 'Giúp khách sạn của bạn hoạt động trơn tru hơn, tiết kiệm thời gian và tối ưu hóa doanh thu với nền tảng thiết kế website hiện đại, chuyên nghiệp.'
            ],
            'media_order' => 'professional.jpg,modern.webp,effective.jpg'
        ],
        'frontmatter' => 'title: \'Lợi ích khi sử dụng dịch vụ của chúng tôi\'
content:
    items: \'@self.modular\'
menu: \'Lợi ích\'
metadata:
    description: \'Giúp khách sạn của bạn hoạt động trơn tru hơn, tiết kiệm thời gian và tối ưu hóa doanh thu với nền tảng thiết kế website hiện đại, chuyên nghiệp.\'
media_order: \'professional.jpg,modern.webp,effective.jpg\'',
        'markdown' => '<!-- Phần văn bản -->
<div class="benefits-text">
	<h2><strong>Lợi ích khi sử dụng dịch vụ của chúng tôi</strong></h2>
	<p>Giúp khách sạn của bạn hoạt động trơn tru hơn, tiết kiệm thời gian và tối ưu hóa doanh thu với nền tảng thiết kế website hiện đại, chuyên nghiệp.</p>
</div>

<!-- Card hình ảnh -->
<div class="card-wrapper">
    <!-- Start card hình ảnh 1-->
        <div class="card-container">
            <div class="card">
                <img src="{{ page.media[\'professional.jpg\'].url }}" alt="professional">
            </div>
            <div class="text-overlay">Professional</div>
        </div>
     <!-- End card hình ảnh 1-->

    <!-- Start card hình ảnh 2-->
        <div class="card-container">
            <div class="card">
                <img src="{{ page.media[\'modern.webp\'].url }}" alt="modern">
            </div>
            <div class="text-overlay">Modern</div>
        </div>
     <!-- End card hình ảnh 2-->
        
    <!-- Start card hình ảnh 3-->
        <div class="card-container">
            <div class="card">
                <img src="{{ page.media[\'effective.jpg\'].url }}" alt="effective">
            </div>
            <div class="text-overlay">Effective</div>
        </div>
     <!-- End card hình ảnh 3-->
</div>'
    ]
];
