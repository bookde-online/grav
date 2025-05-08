<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/config/plugins/email.yaml',
    'modified' => 1743266831,
    'size' => 359,
    'data' => [
        'enabled' => true,
        'from' => 'dungnguyen19724@gmail.com',
        'to' => '22520288@gm.uit.edu.vn',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'dungnguyen19724@gmail.com',
                'password' => 'fqmzbchibszzugvx'
            ],
            'sendmail' => [
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
