<?php
namespace apps\home\ctrl;
use apps\home\model\newHouse;
use apps\home\model\demoModel;
class indexCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
 $this->db = new newHouse();
  }

  // demo 
  public function demo(){
    // 返回结果
    $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
    
   
    
    // 模拟数据
   $data = $this->db->sel();
  
 
    // 数据赋值给返回结果
    $res['data'] = $data;
    
   
    echo json_encode($res,true);
    die;

  }
  public function demo2(){

  }

  // 默认首页
  public function index(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['data'] = array(); // 数据
      // data
      $data = array();
      


    // 数据赋值给返回结果
    $res['data'] = $data;
      echo json_encode($res,true);
      die;
  }

    public function test(){

        $this->display('index','test.html');
    }

    public function save(){
        var_dump($_FILES);
    }
    public function recommend(){
      $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
     
    // 模拟数据
   $data = $this->db->recommend();
 

    // 数据赋值给返回结果
    $res['data'] = $data;
    
   
    echo json_encode($res,true);
    die;

    }
     public function recommend1(){
      $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
     
    // 模拟数据
   $data = $this->db->recommend1();
  

    // 数据赋值给返回结果
    $res['data'] = $data;
    
   
    echo json_encode($res,true);
    die;

    }
     public function recommend2(){
      $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
     
    // 模拟数据
   $data = $this->db->recommend2();
  

    // 数据赋值给返回结果
    $res['data'] = $data;
    
   
    echo json_encode($res,true);
    die;

    }
     public function category(){
      $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
     
    // 模拟数据
   $data = $this->db->category();
  

    // 数据赋值给返回结果
    $res['data'] = $data;
    
   
    echo json_encode($res,true);
    die;

    }
     public function article(){
      $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
     
    // 模拟数据
    
   $data = $this->db->article('$id');
  

    // 数据赋值给返回结果
    $res['data'] = $data;
    
   
    echo json_encode($res,true);
    die;

    }

}

