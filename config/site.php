<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:35 PM
 */


return \yii\helpers\ArrayHelper::merge(
// main config
    [
        'defaultRoute' => '/site/index',
        'controllerNamespace' => 'site\controllers',
        'controllerMap' => [
            'site' => [
                'class' => \site\controllers\SiteController::class,
            ],
        ],
        'components' => [
            'view' => [
                'theme' => [
                    'pathMap' => [
                        '@app/views' => [
                            '@site/views',
                        ],
                    ],
                ],
            ],
        ],
    ],

    // auth module
    [
        'modules' => [
            'auth' => [
                'enableRegistration' => true,
            ],
        ],
        'as globalAccess' => [
            'class' => '\codexten\yii\behaviors\GlobalAccessBehavior',
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['user'],
                ],
            ],
        ],
        'components' => [
            'view' => [
                'theme' => [
                    'pathMap' => [
                        '@codexten/yii/modules/auth/' => [
                            '@site/modules/auth/',
                        ],
                    ],
                ],
            ],
        ],
    ]
);