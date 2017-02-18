<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14 0014
 * Time: 下午 7:59
 */

namespace backend\controllers;


use yii\base\Controller;

class OrderController extends Controller
{
    public $enableCsrfValidation=false;

    /**
     * 登录主页
     * @return string
     */
    public function actionAdmin(){
        return $this->renderPartial('index');
    }

    /**
     * 个人简历
     * @return string
     */
    public function actionJianli(){
        return $this->renderPartial('jianli');
    }
}