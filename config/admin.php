<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 14/2/19
 * Time: 8:23 PM
 */

return \yii\helpers\ArrayHelper::merge(
//admin
    [
        'controllerNamespace' => 'admin\controllers',
        'controllerMap' => [
            'dashboard' => [
                'class' => \admin\controllers\DashboardController::class,
            ],
        ],
        'components' => [
            'view' => [
                'theme' => [
                    'pathMap' => [
                        '@app/views' => [
                            '@admin/views',
                        ],
                    ],
                ],
            ],
        ],
    ],
    //another config
    [

    ]
);