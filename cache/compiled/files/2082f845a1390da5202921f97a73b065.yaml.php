<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/user/config/plugins/email.yaml',
    'modified' => 1742970463,
    'size' => 378,
    'data' => [
        'enabled' => true,
        'from' => 'dungnguyen19724@gmail.com',
        'to' => '22520288@gm.uit.edu.vn',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'ssl',
                'user' => 'Dungnguyen19724@gmail.com',
                'password' => 'lkyzmvgkamqixbqs'
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
        'body' => NULL
    ]
];
