<?php
return [
    # yii\web\Controller requires idenitityClass => User
    [
        'class'      => 'yii\rest\UrlRule',
        'prefix'     => 'api/v1',
        'controller' => [ 'products' => 'restapi/products' ],
    ]
];