<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:35 PM
 */

return [
    'controllerNamespace' => 'site\controllers',
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
];