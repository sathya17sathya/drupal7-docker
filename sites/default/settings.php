<?php

//Redis
  $conf['redis_client_interface'] = 'Predis'; // Can be "Predis".
  $conf['redis_client_host']      = 'redis';  // Your Redis instance hostname.
  $conf['lock_inc']               = 'sites/default/modules/redis/redis.lock.inc';
  $conf['path_inc']               = 'sites/default/modules/redis/redis.path.inc';
  $conf['cache_backends'][]       = 'sites/default/modules/redis/redis.autoload.inc';
  $conf['cache_default_class']    = 'Redis_Cache';


$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'drupal',
      'username' => 'admin',
      'password' => 'admin',
      'host' => 'db',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$update_free_access = FALSE;
$drupal_hash_salt = 'Olq1vqraCjSjWi_yAkUK_ehqSg1VuEtB4smsydOz4xE';

# $base_url = 'http://www.example.com';  // NO trailing slash!

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
