<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Admin;
use app\models\Order;

class AdminController extends Controller
{
	public function init(){
		$this->enableCsrfValidation = false;
	}
    /*后台登陆主页*/
    public function actionIndex()
    {
    	$view = 'index';
    	if(empty($_SESSION['name'])){
    		$view = 'login';
    	}else{
            
        }
        return $this->render($view);
    }
    /*最终单反馈*/
    public function actionConfirmation(){
    	return $this->render('confirmation');
    }
    public function actionLogin(){
    	$view = 'login';
        $data = array();
    	if(!empty($_POST)){
    		$sql = Admin::find();
    		$userNameData = $sql->andWhere($_POST)->one();
    		if(!empty($userNameData)){
    			$session = Yii::$app->session;
    			$session['name'] = $_POST['username'];
    		}
    	}
        if(isset($_SESSION['name'])){
            $order = order::find();
                $orderData = $order->where(array('>','id',0))->all();
                $data['data'] = $orderData;
                $view = 'index';
        }
    	return $this->render($view,$data);
    }
}
