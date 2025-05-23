<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/google-analytics/languages/en.yaml',
    'modified' => 1647312584,
    'size' => 1851,
    'data' => [
        'PLUGIN_GOOGLE_ANALYTICS' => [
            'ADVERTISING_FEATURES' => 'Disable advertising features',
            'ADVERTISING_FEATURES_HELP' => 'Because advertising features can be enabled through your Google Analytics admin settings, you can disable them programmatically',
            'ANONYMIZE_IP' => 'IP Anonymization',
            'ANONYMIZE_IP_HELP' => 'Anonymize the IP addresses of hits sent to Google Analytics',
            'BLOCKED_IPS' => 'Blocked IP addresses',
            'BLOCKED_IPS_HELP' => 'For the given IP addresses the Google Analytics code will not be embedded',
            'COOKIE_DOMAIN' => 'Domain',
            'COOKIE_DOMAIN_HELP' => 'Override the automatic cookie domain configuration',
            'COOKIE_EXPIRATION' => 'Expiration',
            'COOKIE_EXPIRATION_HELP' => 'Cookie expiration time in seconds. Default is 28 days',
            'COOKIE_PREFIX' => 'Prefix',
            'COOKIE_PREFIX_HELP' => 'Rename the cookie prefix to avoid name conflicts',
            'COOKIE_UPDATE' => 'Update',
            'COOKIE_UPDATE_HELP' => 'When set to false, cookies are not updated on each page load',
            'DO_NOT_TRACK' => 'Do Not Track (DNT)',
            'DO_NOT_TRACK_HELP' => 'Google Analytics will not be embedded if the Browser sends the DNT parameter',
            'OBJECT_NAME' => 'Global gtag() Object',
            'OBJECT_NAME_HELP' => 'Rename the global gtag() object to avoid name conflicts',
            'OPT_OUT' => 'Support for opted-out users',
            'OPT_OUT_HELP' => 'Disable Google Analytics without removing the gtag.js tag. For example if your site has an option for the user to opt-out of Google Analytics',
            'OPT_OUT_DESCRIPTION' => 'To enable Google Analytics programmatically, set the following window property to <b>false</b>:<br><code>window[\'ga-disable-<b>UA-00000000-1</b>\'] = <b>false</b>;</code> <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/user-opt-out">&rarr; More info</a>',
            'PRIVACY' => 'Privacy',
            'SECTION_ADVANCED' => 'Advanced',
            'SECTION_COOKIE' => 'Cookie',
            'TACKING_ID' => 'Tracking ID',
            'TACKING_ID_HELP' => 'Google Analytics Tracking ID'
        ]
    ]
];
