<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/9 0009
 * Time: 下午 2:44
 */

namespace backend\models;

use yii\base\model;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

class Login extends Model
{
    public $password;
    public $email;
//    public $code;
    public $type;

    public function rules()
    {
        return [
            ['password', 'required', 'message' => '密码不可以为空'],
            ['email', 'required','message' => '邮箱必须填写'],
//            ['code', 'required','message' => '验证码必须填写'],

            [['password'],'match','pattern'=>'/^[a-z][A-Z][0-9]{6,16}$/','message'=>'密码长度为6-16位'],
            [['email'],'match','pattern'=>'/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/','message'=>'邮箱格式不正确'],
        ];
    }
    public function attributeLabels()
    {
        return array(
            'password'=>'密码',
            'email'=>'邮箱',
//            'code'=>'验证码',
            'type'=>'类型选择'
        );
    }
}