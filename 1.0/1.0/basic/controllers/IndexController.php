<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Order;

class IndexController extends Controller
{
    public function init(){
        $this->enableCsrfValidation = false;
    }
    /*随机订单号*/
    private function orderNum(){
        $name = time();
        $arr = array_merge(range(0, 9),range(9,99),range(99,999));
        shuffle($arr);
        for($i=0;$i<6;$i++){
            $name += $arr[$i];
        }
        return $name;
    }
    public function actionIndex()
    {
        return $this->render('index');
    }
    /*联系方式提交*/
    public function actionRegulations(){
        $view = 'regulations';
        if(isset($_POST['agree'])){
            $user = new User();
            $arr = array("name"=>null,'organization'=>null,'email'=>null,'phone'=>null,'country'=>null);
            foreach ($arr as $key => $val) {
                $user->$key = $_POST[$key];
                 $arr[$key] = $_POST[$key];
            }
            $user->ctime = time();
            $user->save();
            $user = User::find();
            /*保存用户提交的数据*/
            $_SESSION['user'] = $_POST;
            $user = user::find();
            $id = $user->andWhere($arr)->one();
            $_SESSION['user']['u_id'] = $id->booking_user_id;
            if(isset($_POST['agree-individual'])){
                $view = 'single';
            }
            if(isset($_POST['agree-group'])){
                $view = 'group';
            }
        }
        return $this->render($view);
    }
    /*单人订餐*/
    public function actionSingle(){
        $view = 'single';
        /*订单反馈数据*/
        $data = array(
                'num'       =>null,/*订单号*/
                'data'      =>array()
            );
        if(isset($_POST['book-individual'])){
            $errors = false;
            $order_num = (string)($this->orderNum());
            foreach ($_POST as $key => $value) {
                $order = new Order();
               $str = substr($key,1,1);
               $type = substr($key,4,1);
               $startDtae = strtotime("+ {$str} day");
               if(empty($startDtae))continue;
               $sql = array(
                    'order_num' =>  $order_num,
                    'booking_user_id' => (int)($_SESSION['user']['u_id']),
                    'service_type' => (int)($type),
                    'service_date' => (int)( $str),
                    'seat_num' => '2',
                    'status' => 0,
                    'order_type' => 1,
                    'group_num' => '0',
                    'guest_name' => $_SESSION['user']['name'],
                    'guest_country' => $_SESSION['user']['country'],
                    'ctime' => time()
                );
               $data['num'] = $order_num;
               $data['userName'] = $_SESSION['user']['name'];
               foreach ($sql as $k => $val) {
                    $order->$k = $val;
               }
               $sql['experience'] = confirmation($type);
               $sql['service_date'] = substr($key,0,2);
               array_push($data['data'],$sql);
               if(!$order->save()){
                    P($order->getErrors());
                     $errors = true;
                    die('检测错误!数据插入失败!');
               }
            }
            if($errors != true){
                $view = 'confirmation';
            }
        }
        return $this->render($view,$data);
    }
    /*多人订餐*/
    public function actionGroup(){
        $view = 'group';
        $datas = array(
                'num'       =>null,/*订单号*/
                'data'      =>array()
            );
        if(isset($_POST['book-group'])){
            $errors = false;
            // P($_POST);
            $data = '';
            $arr = array();
           
            // P($_POST);
            $data = '';
            $order_num = $this->orderNum();/*生成订单号*/
            foreach ($_POST as $key => $value) {
                if(!is_array($value)) continue;
                if(empty($value[0])) continue;
                $_data = substr($key,0,5);
                if($_data == $data )continue;
                $data = substr($key,0,5);
                $_data_n =  $data .'-n';
                $_data_o =  $data .'-o';
                $n = '';
                $o = '';
                foreach ($_POST as $k => $val) {
                    if($k == $_data_n){
                        foreach ($val as $v) {
                            if(empty($v)) continue;
                            $n .= $v.',';
                        }
                    }
                    if($k == $_data_o){
                        foreach ($val as $v) {
                            if(empty($v)) continue;
                            $o .= $v.',';
                        }
                    }
                }
                $order = new Order();
                $day = substr($key,1,1);//定的那天的餐
                $type = substr($key,4,1);//那个时间段的
                $n = substr($n,0,-1);/*用餐人所有的姓名*/
                $o = substr($o,0,-1);/*用餐人所有的国籍*/
                $service_date = strtotime("+ {$day} day");
                 $sql = array(
                    'order_num' =>  (string)($order_num),
                    'booking_user_id' => (int)($_SESSION['user']['u_id']),
                    'service_type' => (int)($type),
                    'service_date' => (int)($day),
                    'seat_num' => '2',
                    'status' => 0,
                    'order_type' => 2,
                    'group_num' => (string)($this->orderNum()),/*生成团体号*/
                    'guest_name' => (string)($n),
                    'guest_country' => (string)($o),
                    'ctime' => time()
                );
                foreach ($sql as $key => $value) {
                    $order->$key = $value;
                }
                if($order->save()){
                    $sql['experience'] = confirmation($type);
                    $sql['service_date'] = substr($key,0,2);
                    $datas['num'] = $order_num;  
                    $datas['userName'] = $_SESSION['user']['name'];  
                    array_push($datas['data'],$sql);
                    $view = 'confirmation';
                }else{
                    P($order->getErrors());
                }
            }
        }
    	return $this->render($view,$datas);
    }
    /*初始订单反馈*/
    public function actionConfirmation(){
    	return $this->render('confirmation',$data);
    }
}