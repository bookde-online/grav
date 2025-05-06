<?php

/**
 * @package    Grav.Core
 *
 * @copyright  Copyright (c) 2015 - 2024 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav;

\define('GRAV_REQUEST_TIME', microtime(true));
\define('GRAV_PHP_MIN', '7.3.6');


if (PHP_SAPI === 'cli-server') {
    $symfony_server = stripos(getenv('_'), 'symfony') !== false || stripos($_SERVER['SERVER_SOFTWARE'] ?? '', 'symfony') !== false || stripos($_ENV['SERVER_SOFTWARE'] ?? '', 'symfony') !== false;

    if (!isset($_SERVER['PHP_CLI_ROUTER']) && !$symfony_server) {
        die("PHP webserver requires a router to run Grav, please use: <pre>php -S {$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']} system/router.php</pre>");
    }
}

// Ensure vendor libraries exist
$autoload = __DIR__ . '/vendor/autoload.php';
if (!is_file($autoload)) {
    die('Please run: <i>bin/grav install</i>');
}

// Register the auto-loader.
$loader = require $autoload;

// Set timezone to default, falls back to system if php.ini not set
date_default_timezone_set(@date_default_timezone_get());

// Set internal encoding.
@ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');

use Grav\Common\Grav;
use RocketTheme\Toolbox\Event\Event;

// Get the Grav instance
$grav = Grav::instance(array('loader' => $loader));

// Process the page
try {
    $grav->process();
} catch (\Error|\Exception $e) {
    $grav->fireEvent('onFatalException', new Event(array('exception' => $e)));
    throw $e;
}
//SCHEMA for SEO
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "BookDe",
  "url": "http://localhost/grav",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "http://localhost/?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "ALLXONE",
  "url": "http://localhost/grav",
  "logo": "http://localhost//grav/user/pages/07._config/logo.webp">
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-800-555-5555",
    "contactType": "Customer Service"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "http://localhost/grav"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Services",
      "item": "http://localhost/grav/en#services"
    }
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Pricing",
      "item": "http://localhost/grav/price"
    }
    {
      "@type": "ListItem",
      "position": 4,
      "name": "How it work",
      "item": "http://localhost/grav/how-it-work"
    }
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Blog",
      "item": "http://localhost/grav/blog"
    }
    {
      "@type": "ListItem",
      "position": 6,
      "name": "Contact",
      "item": "http://localhost/grav/contact"
    }
  ]
}
</script>



