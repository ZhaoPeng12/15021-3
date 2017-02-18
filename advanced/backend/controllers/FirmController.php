<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class FirmController extends Controller{
    public $enableCsrfValidation=false;
    //公司信息页面
    public function actionFirm(){
        //调取公司信息页面
        return $this->render('firm');
    }
    public function actionAdmin(){
        return $this->renderPartial('myhome');
    }
   public function actionFirm_do(){

        $data = \yii::$app->request->post();
        $f_text = $data['f_text'];
        $f_name = $data['f_name'];
//        $f_logo = $data['f_logo'];
        $f_http = $data ['f_http'];
        $f_city = $data ['f_city'];
        $f_industry = $data ['f_industry'];
        $f_scale = $data['f_scale'];
        $f_devle = $data ['f_devle'];
        $f_generalize = $data ['f_generalize'];
        $sql= "insert into g_firm (f_text,f_name,f_http,f_city,f_industry,f_scale,f_devle,f_generalize)value('$f_text','$f_name','$f_http','$f_city','$f_industry','$f_scale','$f_devle','$f_generalize')";
        $db =\yii::$app->db->createCommand($sql)->query();
        if($db){
            echo "<script>alert('填写成功');location.href='?r=firm/'</script>";
        }else{
            echo "<script>alert('填写失败');location.href='?r=firm/firm'</script>";
        }
   }

    //发布职位
    public function actionCreate(){
        return $this->renderPartial('create');
    }

    //我的简历
    public function actionJianli(){
        return $this->renderPartial('jianli');
    }
    //待定简历
    public function actionCan(){
        return $this->renderPartial('can');
    }
    //收到的简历
    public function actionPositions(){
        return $this->renderPartial('positions');
    }
    //不适合的简历
    public function actionHaves(){
        return $this->renderPartial('haves');
    }
    //已经通知面试的简历
    public function actionNotice(){
        return $this->renderPartial('notice');
    }
    //自动过滤的简历
    public function actionAuto(){
        return $this->renderPartial('auto');
    }
    //有效职位
    public function actionPosit(){
        return $this->renderPartial('posit');
    }
    //失效职位
    public function actionPos(){
        return $this->renderPartial('pos');
    }
    //我收到的简历
    public function actionPo(){
        return $this->renderPartial('po');
    }

}