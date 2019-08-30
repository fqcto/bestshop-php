<?php

// 数据库配置
$config = [
    'host' => '127.0.0.1',
    'database' => 'yoshop',
    'username' => 'root',
    'password' => 'root',
    'port' => '3306',
    'charset' => 'utf8',
];

return [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => $config['host'],
    // 数据库名
    'database' => $config['database'],
    // 用户名
    'username' => $config['username'],
    // 密码
    'password' => $config['password'],
    // 端口
    'hostport' => $config['port'],
    // 连接dsn
    'dsn' => '',
    // 数据库连接参数
    'params' => [],
    // 数据库编码默认采用utf8
    'charset' => $config['charset'],
    // 数据库表前缀
    'prefix' => 'yoshop_',
    // 数据库调试模式
    'debug' => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy' => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate' => false,
    // 读写分离后 主服务器数量
    'master_num' => 1,
    // 指定从服务器序号
    'slave_no' => '',
    // 是否严格检查字段是否存在
    'fields_strict' => true,
    // 数据集返回类型
    'resultset_type' => 'collection',
    // 自动写入时间戳字段
    'auto_timestamp' => true,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain' => false,
];
