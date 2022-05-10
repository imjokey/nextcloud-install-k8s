<?php
$CONFIG = array(
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => array(
       'host' => 'redis.production.svc',
       'port' => 6379,
    ),
);
