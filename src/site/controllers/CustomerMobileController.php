<?php

namespace site\controllers;

use Yii;
use codexten\yii\web\CrudController;
use site\models\CustomerMobile;

/**
 * CustomerMobileController implements the CRUD actions for CustomerMobile model.
 */
class CustomerMobileController extends CrudController
{
    public $modelClass = CustomerMobile::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();

        return $actions;
    }

}
