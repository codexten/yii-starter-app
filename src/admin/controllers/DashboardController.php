<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:34 PM
 */

namespace admin\controllers;


use codexten\yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}