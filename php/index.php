<?php
require "predis/autoload.php";

Predis\Autoloader::register();

$dsn = "mysql:charset=utf8;host=mysql;dbname=test_db";
$db = new PDO($dsn, "root", "toor");

$res = $db->prepare("select * from users");
$res->execute();

$result = $res->fetchAll();

$redis = new Predis\Client([
        'sheme' => 'tcp',
        'host' => 'redis',
        'post' => 6379
]);

$redis->flushall();


$redis->exists('users');


$redis->lpush('users', json_encode($result));

$res = $redis->lrange('users', 0, -1);
print_r($res);

?>
