<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/bookdevn/user/config/plugins/email.yaml',
    'modified' => 1747819866,
    'size' => 362,
    'data' => [
        'enabled' => true,
        'from' => 'hungpq1309developer@gmail.com',
        'to' => 'hungpq1309developer@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'hungpq1309developer@gmail.com',
                'password' => 'higlwhanglymmfuw',
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true,
        'cc' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'body' => 'helo'
    ]
];
