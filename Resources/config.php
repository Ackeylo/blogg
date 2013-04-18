<?php


    $config['db_host'] = 'localhost';
    $config['db_user'] = 'username';
    $config['db_pass'] = 'root';
    $config['db_name'] = 'blog';

    foreach ( $config as $k => $v){
        define(strtoupper($k), $v);
    }



?>

