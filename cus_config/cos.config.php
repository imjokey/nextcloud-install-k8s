<?php
$CONFIG = array(
  'objectstore' => array(
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => 'jokey-xxx', // 存储桶名称（空间名称）
      'autocreate' => false,
      'key'  => 'xxxxxxxxxxx', // 替换为用户的 SecretId
      'secret' => 'xxxxxxxxxxxx', // 替换为用户的 SecretKey
      'hostname' => 'cos.ap-chengdu.myqcloud.com', // 将 <Region> 修改为所属地域，如 ap-shanghai
      'use_ssl' => true,
    ),
  ),
);
