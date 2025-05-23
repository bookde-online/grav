<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/google-analytics/languages/de.yaml',
    'modified' => 1647312584,
    'size' => 2037,
    'data' => [
        'PLUGIN_GOOGLE_ANALYTICS' => [
            'ADVERTISING_FEATURES' => 'Werbefunktionen',
            'ADVERTISING_FEATURES_HELP' => 'Da die Webefunktionen im Google Analytics Adminbereich aktiviert werden, können Sie hier programmatisch deaktiviert werden',
            'ANONYMIZE_IP' => 'IP-Anonymisierung',
            'ANONYMIZE_IP_HELP' => 'Anonymisierung der IP-Adressen welche an Google Analytics gesendet werden',
            'BLOCKED_IPS' => 'Blockierte IP-Adressen',
            'BLOCKED_IPS_HELP' => 'Für die angegebenen IP-Adressen wird der Google Analytics Code nicht eingebunden',
            'COOKIE_DOMAIN' => 'Domain',
            'COOKIE_DOMAIN_HELP' => 'Überschreiben der autom. Domain-Konfiguration des Cookies',
            'COOKIE_EXPIRATION' => 'Haltbarkeitszeit',
            'COOKIE_EXPIRATION_HELP' => 'Haltbarkeitszeit des Cookies in Sekunden. Standard sind 28 Tage',
            'COOKIE_PREFIX' => 'Präfix',
            'COOKIE_PREFIX_HELP' => 'Um Namenskonflikte zu vermeiden, kann der Präfix des Cookies umbenannt werden',
            'COOKIE_UPDATE' => 'Aktualisierung',
            'COOKIE_UPDATE_HELP' => 'Im Falle von "Deaktiviert", wird das Cookie nicht bei jedem Seitenaufruf aktualisiert',
            'DO_NOT_TRACK' => 'Do Not Track (DNT)',
            'DO_NOT_TRACK_HELP' => 'Google Analytics wird nicht eingebunden, wenn der Browser den DNT Parameter sendet',
            'OBJECT_NAME' => 'Globales gtag() Objekt',
            'OBJECT_NAME_HELP' => 'Um Namenskonflikte zu vermeiden, kann das globale gtag() Objekt umbenannt werden',
            'OPT_OUT' => 'Unterstützung für Opt-Out Nutzer',
            'OPT_OUT_HELP' => 'Bei der Möglichkeit, sich von Google Analytics abzumelden, kann Google Analytics temporär deaktiviert werden ohne es zu entfernen',
            'OPT_OUT_DESCRIPTION' => 'Um Google Analytics zu aktivieren, muss im Code folgende Fenstereigenschaft auf <b>false</b> gesetzt werden:<br><code>window[\'ga-disable-<b>UA-00000000-1</b>\'] = <b>false</b>;</code> <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/user-opt-out">&rarr; Mehr Info</a>',
            'PRIVACY' => 'Privatsphäre',
            'SECONDS' => 'Sekunden',
            'SECTION_ADVANCED' => 'Erweiterte Einstellungen',
            'SECTION_COOKIE' => 'Cookie',
            'TACKING_ID' => 'Tracking-ID',
            'TACKING_ID_HELP' => 'Google Analytics Tracking-ID'
        ]
    ]
];
