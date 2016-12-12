<?php
Yii::setAlias('@common', dirname(__DIR__));

return [
    'id'         => 'app-standard',
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
    'basePath'   => dirname(dirname(dirname(__DIR__))),
    'components' => [
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => true,
        ],
    ],
];
