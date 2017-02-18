<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14 0014
 * Time: 下午 3:29
 */

namespace backend\controllers;

use yii\web\Controller;
use backend\models\Login;

class LoginController extends Controller
{
    public $enableCsrfValidation=false;

    /**
     * @return string
     * 登录
     */
    public function actionLogin(){
        $data = \Yii::$app->request->post('Login');
        if(!empty($data)){
            $session = \Yii::$app->session;
            $session->open();
            $email = $data['email'];
            $c = "select num from c_login where email = '$email'";
            $res = \Yii::$app->db->createCommand($c)->queryOne();
            $ci = $res['num'];
            if($ci < 3){
                $password = $data['password'];
                $sql = "select * from login where email = '$email' and password = '$password'";
                $res = \Yii::$app->db->createCommand($sql)->queryOne();
                if($res){
                    $type = $res['type'];
                    if($type == 0){
                        $id = $res['id'];
                        \Yii::$app->session['id'] = $id;
                        return $this->redirect(['order/admin']);
                    }else{
                        $id = $res['id'];
                        \Yii::$app->session['id'] = $id;
                        return $this->redirect(['firm/admin']);
                    }
                }else{
                    $c1 = "select * from c_login where email = '$email'";
                    $r1 = \Yii::$app->db->createCommand($c1)->queryOne();
                    if($r1){
                        $first = time();
                        $c2 = "update c_login set num = num+1,time = '$first' where email = '$email'";
                        \Yii::$app->db->createCommand($c2)->query();
                    }else{
                        $c3 = "insert into c_login (email,num) VALUES ('$email','1')";
                        \Yii::$app->db->createCommand($c3)->query();
                    }
                    echo "<script>alert('亲账户密码好像不匹配哦！');history.go(-1);</script>";
                }
            }else{
                $f = "select time from c_login where email = '$email'";
                $t = \Yii::$app->db->createCommand($f)->queryOne();
                $m = $t['time'];
                $dang = time();
                $cha = $dang-$m;
                if($cha > 10800){
                    $s = "delete from c_login where email = '$email'";
                    \Yii::$app->db->createCommand($s)->query();
                    $model = new Login();
                    return $this->render('login',['model'=>$model]);
                }else{
                echo "<script>alert('亲以后注意点，把密码记清！给你点小惩罚，三小时之内不能登录！');history.go(-1);</script>";
                }
            }
        }else{
            $model = new Login();
            return $this->render('login',['model'=>$model]);
        }
    }

    /**
     * 注册
     * @return string
     */
    public function actionRegister(){
        $data = \Yii::$app->request->post('Login');
        if(!empty($data)){
            $type = $data['type'];
            $email = $data['email'];
            $passeord = $data['password'];
            $sql1 = "select email from login where email = '$email'";
            $res = \Yii::$app->db->createCommand($sql1)->queryOne();
//            echo $sql1;die;
            if(!empty($res)){
//                echo "1";die;
                echo "<script>alert('亲想清楚点，此账号已经注册了');history.go(-1);</script>";
            }else{
//                echo "错了"; die;
                $sql = "insert into login (type,email,password) VALUES ('$type','$email','$passeord')";
                \Yii::$app->db->createCommand($sql)->execute();
                if($type == 0){
                    echo "<script>alert('注册成功，请填写个人信息');location.href='?r=order/jianli';</script>";
                }else{
                    echo "<script>alert('注册成功，请填写公司信息');location.href='?r=firm/firm';</script>";
                }
            }

        }else{
            $model = new Login();
            return $this->render('register',['model'=>$model]);
        }
    }

    /**
     * 找回密码
     * @return string
     */
    public function actionReset(){
            $session=\Yii::$app->session;
            $session->open();
                $data = \Yii::$app->request->post();
                if($data){
                    $email = $data['email'];
                    $mail= \Yii::$app->mailer->compose();
                    $mail->setTo("$email");
                    $mail->setSubject("拉钩");
                    //$mail->setTextBody('zheshisha ');   //发布纯文字文本
                    $num = rand(10000,90000);
                    $session->set('num',$num);
                    $session->set('email',$email);
                        $mail->setHtmlBody("<br>这就是我们公司的".$num."验证码，请勿外泄<a href='http://www.xiaoyi.com/index.php?r=login/resett'>点击验证</a>");    //发布可以带html标签的文本
                    $mail->send();
                    return $this->renderPartial('reset2',['email'=>$email]);

                }else{

                    return $this->renderPartial('reset');
                }
    }

    /**
     * @return string
     * 密码修改页面
     */
    public function actionResett(){
        $data = \Yii::$app->request->post();
        if($data){
            $session=\Yii::$app->session;
            $session->open();
            $nu = $session->get('num');
            $num = $data['num'];
            if($nu == $num){
                $email = $session->get('email');
                $password = $data['password'];
                $password1 = $data['password1'];
                if($password == $password1){
                    $sql = "update login set password='$password' where email='$email'";
                    $res = \Yii::$app->db->createCommand($sql)->query();
                    if($res){
                        $model = new Login();
                        return $this->render('login',['model'=>$model]);
                    }else{
                        echo "<script>alert('你怎么能这样把我的程序都弄乱了！');history.go(-1);</script>";
                    }
                }else{
                    echo "<script>alert('注意点！两次密码都不一样！还改密码那！');history.go(-1);</script>";
                }
            }else{
                echo "<script>alert('你想干嘛！验证码都不对，快回去仔细看看！');history.go(-1);</script>";
            }
        }else{
            return $this->renderPartial('reset1');
        }
    }
    public function actionUpdatep(){
        $data = \Yii::$app->request->post();
        if($data){

        }else{
            return $this->renderPartial('updatePwd');
        }
    }
}