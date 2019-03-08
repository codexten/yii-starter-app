<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:35 PM
 */

namespace site\controllers;

class SiteController extends \codexten\yii\web\controllers\SiteController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}