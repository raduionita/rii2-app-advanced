<?php
return [
    [
        'class'      => 'yii\rest\UrlRule', // requires idenitityClass => User
        'prefix'     => 'api/v1',
        'controller' => [ 'products' => 'restapi/products' ],
    ]
];