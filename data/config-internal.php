<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => NULL,
    'charset' => NULL,
    'dbname' => '',
    'user' => '',
    'password' => ''
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'adminUpgrade' => false,
  'adminExtensionManage' => true,
  'adminExtensionUpload' => true,
  'isInstalled' => false,
  'microtimeInternal' => 1792328041.28737
];
