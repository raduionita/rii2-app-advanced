<?php
Yii::setAlias('@restapi', dirname(dirname(__DIR__)) . '/restapi');
return [
    'modules' => [
        'restapi' => [
            'class' => 'restapi\Module',
        ],
    ],
    'components' => [
        'response' => [
            'class' => 'yii\web\Response',
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class' => 'yii\web\JsonResponseFormatter',
                    'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_SLASHES,
                ],
            ],
        ],
        'urlManager' => [
            'rules' => require(__DIR__ . '/routes.php'),
        ],
//        'log' => [
//            'targets' => [
//                [
//                    'class' => 'yii\log\Web'
//                ]
//            ],
//        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];
