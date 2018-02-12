<?php

return [
    'server'=>[
        'host'=>'0.0.0.0',
        'port'=>9501,
        'type'=>SWOOLE_TCP,
        'run_model'=>SWOOLE_PROCESS,
        'setting'=>[
            //'task_worker_num' => 8, //�첽�������
            //'task_max_request'=>10,
            'max_request'=>5000,//ǿ�ҽ������ô�������
            'worker_num'=>8
        ],
    ],
    'db' => [
        'host' => '192.168.40.1',
        'user' => 'root',
        'password' => '',
        'database' => 'blog',
        'charset' => 'utf8',
    ],
    'debug'=>true,
    'temp'=>ROOT.'/temp',
    'log'=>ROOT.'/log',
];