<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 26/2/19
 * Time: 11:23 AM
 */
?>

<?= dmstr\widgets\Menu::widget(
    [
        'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
        'items' => [
            [
                'label' => 'Dashboard',
                'icon' => 'tachometer',
                'url' => ['/dashboard/index'],
            ],
        ],
    ]
) ?>