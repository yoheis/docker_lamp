<?php
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->set('key', 'value');
    echo 'key:' . $redis->get('key') . '<br/>';
    $redis->delete('key');
    echo 'key:' . $redis->get('key') . '<br/>';
    $redis->close();
