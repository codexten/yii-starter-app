<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:38 PM
 */

return [
    //bootswatch
    'bootswatch.theme' => 'cosmo',

    'debug.enabled' => $_ENV['DEBUG'],
    'debug.allowedIps' => $_ENV['DEBUG_ALLOWED_IPS'],
    'debug.historySize' => 100,
];