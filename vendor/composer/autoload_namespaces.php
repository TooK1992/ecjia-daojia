<?php

// autoload_namespaces.php 

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Royalcms' => array($vendorDir . '/royalcms/framework'),
    'Royalcms\\Component\\NativeSession\\' => array($vendorDir . '/royalcms/native-session'),
    'Royalcms\\Component\\SmartyView\\' => array($vendorDir . '/royalcms/smarty-view'),
    'Royalcms\\Component\\Aliyun\\' => array($vendorDir . '/royalcms/aliyun'),
    'Royalcms\\Component\\Whoops\\' => array($vendorDir . '/royalcms/whoops'),
    'Royalcms\\Component\\Xmlrpc\\' => array($vendorDir . '/royalcms/xmlrpc'),
    'Royalcms\\Component\\Debugbar\\' => array($vendorDir . '/royalcms/debugbar'),
    'Royalcms\\Component\\LogViewer\\' => array($vendorDir . '/royalcms/log-viewer'),
    'Royalcms\\Component\\Excel\\' => array($vendorDir . '/royalcms/excel'),
    'Royalcms\\Component\\Memcache\\' => array($vendorDir . '/royalcms/memcache'),
    'Royalcms\\Component\\Sentry\\' => array($vendorDir . '/royalcms/sentry'),
    'Royalcms\\Component\\DbExporter\\' => array($vendorDir . '/royalcms/db-exporter'),
    'Royalcms\\Component\\XmlResponse\\' => array($vendorDir . '/royalcms/xml-response'),
    'Royalcms\\Component\\Variable\\' => array($vendorDir . '/royalcms/variable'),
    'Royalcms\\Component\\Script\\' => array($vendorDir . '/royalcms/script'),
    'Royalcms\\Component\\Rewrite\\' => array($vendorDir . '/royalcms/rewrite'),
    'Royalcms\\Component\\Storage\\' => array($vendorDir . '/royalcms/storage'),
    'Royalcms\\Component\\IpAddress\\' => array($vendorDir . '/royalcms/ip-address'),
    'Royalcms\\Component\\Uuid\\' => array($vendorDir . '/royalcms/uuid'),
    'Royalcms\\Component\\Html\\' => array($vendorDir . '/royalcms/html'),
    'Royalcms\\Component\\Agent\\' => array($vendorDir . '/royalcms/agent'),
    'Royalcms\\Component\\QrCode\\' => array($vendorDir . '/royalcms/qrcode'),
    'Royalcms\\Component\\Image\\' => array($vendorDir . '/royalcms/image'),
    'Royalcms\\Component\\Purifier\\' => array($vendorDir . '/royalcms/purifier'),
    'Royalcms\\Component\\Timer\\' => array($vendorDir . '/royalcms/timer'),
    'Royalcms\\Component\\Repository\\' => array($vendorDir . '/royalcms/repository'),
    'Royalcms\\Component\\Requests\\' => array($vendorDir . '/royalcms/requests'),
    'Royalcms\\Component\\HttpRequest\\' => array($vendorDir . '/royalcms/http-request'),
    'Royalcms\\Component\\Sms\\' => array($vendorDir . '/royalcms/sms'),
    'Royalcms\\Component\\Alidayu\\' => array($vendorDir . '/royalcms/alidayu'),
    'Royalcms\\Component\\Pinyin\\' => array($vendorDir . '/royalcms/pinyin'),
    'Royalcms\\Component\\Omnipay\\' => array($vendorDir . '/royalcms/omnipay'),
    'Royalcms\\Component\\Hashids\\' => array($vendorDir . '/royalcms/hashids'),
    'Royalcms\\Component\\Curl\\' => array($vendorDir . '/royalcms/curl'),
    'Royalcms\\Component\\Redis\\' => array($vendorDir . '/royalcms/redis'),
    'Royalcms\\Component\\WeChat\\' => array($vendorDir . '/royalcms/wechat'),
    'Royalcms\\Component\\WeChat\\Menu\\' => array($vendorDir . '/royalcms/wechat-menu'),
    'Royalcms\\Component\\WeChat\\User\\' => array($vendorDir . '/royalcms/wechat-user'),
    'Royalcms\\Component\\WeChat\\Js\\' => array($vendorDir . '/royalcms/wechat-js'),
    'Monolog' => array($vendorDir . '/monolog/monolog/src'),
    'DebugBar' => array($vendorDir . '/maximebf/debugbar/src'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log'),
    'BaconQrCode' => array($vendorDir . '/bacon/bacon-qr-code/src'),
    'Symfony\\Component\\Translation\\' => array($vendorDir . '/symfony/translation'),
    'Symfony\\Component\\Security\\Core\\' => array($vendorDir . '/symfony/security-core'),
    'Symfony\\Component\\Routing\\' => array($vendorDir . '/symfony/routing'),
    'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
    'Symfony\\Component\\HttpKernel\\' => array($vendorDir . '/symfony/http-kernel'),
    'Symfony\\Component\\HttpFoundation\\' => array($vendorDir . '/symfony/http-foundation'),
    'Symfony\\Component\\Finder\\' => array($vendorDir . '/symfony/finder'),
    'Symfony\\Component\\DomCrawler\\' => array($vendorDir . '/symfony/dom-crawler'),
    'Symfony\\Component\\Debug\\' => array($vendorDir . '/symfony/debug'),
    'Symfony\\Component\\CssSelector\\' => array($vendorDir . '/symfony/css-selector'),
    'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
    'Symfony\\Component\\BrowserKit\\' => array($vendorDir . '/symfony/browser-kit'),
    'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
    'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
    'Symfony\\Component\\ClassLoader\\' => array($vendorDir . '/symfony/class-loader'),
    'Guzzle\\Common\\' => array($vendorDir . '/guzzle/common'),
    'Guzzle\\Http\\' => array($vendorDir . '/guzzle/http'),
    'Guzzle\\Parser\\' => array($vendorDir . '/guzzle/parser'),
    'Guzzle\\Plugin\\' => array($vendorDir . '/guzzle/plugin'),
    'Guzzle\\Stream\\' => array($vendorDir . '/guzzle/stream'),
    'Patchwork' => array($vendorDir . '/patchwork/utf8/class'),
    'Normalizer' => array($vendorDir . '/patchwork/utf8/class'),
    'Doctrine\\DBAL\\' => array($vendorDir . '/doctrine/dbal/lib'),
    'Doctrine\\Common\\Lexer\\' => array($vendorDir . '/doctrine/lexer/lib'),
    'Doctrine\\Common\\Inflector\\' => array($vendorDir . '/doctrine/inflector/lib'),
    'Doctrine\\Common\\Collections\\' => array($vendorDir . '/doctrine/collections/lib'),
    'Doctrine\\Common\\Annotations\\' => array($vendorDir . '/doctrine/annotations/lib'),
    'Doctrine\\Common\\Cache\\' => array($vendorDir . '/doctrine/cache/lib'),
    'Doctrine\\Common\\' => array($vendorDir . '/doctrine/common/lib'),
    'Omnipay\\Common\\' => array($vendorDir . '/omnipay/common/src'),
    'Net' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
    'Math' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
    'System' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
    'File' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
    'Crypt' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
    'ClassPreloader' => array($vendorDir . '/classpreloader/classpreloader/src'),
    'PHPParser' => array($vendorDir . '/nikic/php-parser/lib'),
    'Boris' => array($vendorDir . '/d11wtq/boris/lib'),
    'PHPExcel' => array($vendorDir . '/phpoffice/phpexcel/Classes'),
    'Cron' => array($vendorDir . '/mtdowling/cron-expression/src'),
    'Raven_' => array($vendorDir . '/sentry/sentry/lib'),
    'HTMLPurifier' => array($vendorDir . '/ezyang/htmlpurifier/library'),
);
