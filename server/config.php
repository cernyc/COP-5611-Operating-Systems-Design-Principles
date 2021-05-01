<?php
$CONFIG = array (
  'passwordsalt' => 'uJ7UFGoWcpM+WC+GCaVlH+FdpmWj6P',
  'secret' => 'UWIU6+QiWOWyrkqCfF9xReuv7WoOCdfHDVOUl60MYgMFcIm6',
  'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => '10.42.44.33',
    2 => 'DietPi',
  ),
  'datadirectory' => '/mnt/dietpi_userdata/owncloud_data',
  'overwrite.cli.url' => 'http://localhost/owncloud',
  'dbtype' => 'mysql',
  'version' => '10.7.0.4',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'filelocking.enabled' => true,
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => '/run/redis/redis-server.sock',
    'port' => 0,
  ),
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'oc_admin',
  'dbpassword' => 'KpJ5yhfi2x7KXfz2iuHwsAqmn0MuRz',
  'logtimezone' => 'UTC',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/owncloud/apps-external',
      'url' => '/apps-external',
      'writable' => true,
    ),
  ),
  'installed' => true,
  'instanceid' => 'ocbcq2your37',
  'maintenance' => false,
);
