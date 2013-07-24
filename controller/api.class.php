<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);

class apiController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
    
    //用来显示页面，给模板文件的变量的默认值
    $this->data=getAppDataDefault();
    $this->data['sitelink']='./?c=api&a=help';
    $this->data['nav_items']=array();
    $this->data['nav_items']["?c=api&a=test"]='testApi';
  }
  function help() {
    //帮助文件内容见./view/web/main/api/help/help.tpl.php
    
    /*
    a2:static
    a3:jg
    a4:tools
    */
    
    $this->data['top_title']='LaoLinAPI帮助页面';
    $this->data['title']='LaoLinAPI简介';
    $this->data['info']='help';
    render($this->data,NULL,'sharp-default');//使用 lazyPHP core 内的'_.tpl.php' layout渲染页面


  }
  function test() {
    unset($_GET['c']);//c或未定义，或肯定=='api'，故删掉$_GET['c']
    if(isset($_GET['a'])&&$_GET['a']=='test'){
      unset($_GET['a']); //a=='test',则删掉$_GET['a']
    }
    if(count($_GET)>0) {
      //经过上面两步删除后，如果$_GET还有值，要是这些值是正确的理应是运行到别的函数，
      //结果运行到了这里，说明设了很多莫名其妙的参数，返回Unknow
      return $this->_UnknowApi();
    }
    $data["err_code"]=0;
    $data["err_msg"]="success";
    $data['data']='LaoLinAPI is ready.';
    echoRestfulData($data);
  }
  function wp() {
    //error_reporting(E_ALL);
    $b=v('b');
    $data["err_code"]=0;
    $data["err_msg"]="success";
    switch($b) {
      case 'bycat':
        $data["data"]=array();
        
        $npost=intval(v('npost'));
        if($npost<1) $npost=2;
        
        $cat=explode(',',v('cat'));
        
        foreach($cat as $cat1) {
          $data['data'][$cat1]=$this->_wpGetPost("numberposts=$npost&cat=$cat1");
        }
        return echoRestfulData($data);
      //case 'byid':
    }
    return $this->_UnknowApi();
  }
    
  function _wpGetPost($qstr) {
    global $post;
    
    $ret=array();
    $posts = get_posts($qstr);
    foreach ($posts as $post) {
      //print_r($post);
      $d1=array();
      setup_postdata($post); 
      $d1['title']=get_the_title();    
      $d1['text']=get_the_excerpt();
      $d1['link']=get_permalink();
      $ret[]=$d1;
    }
    return $ret;

  }
  function _UnknowApi() {
    $data['err_code']=2001;
    $data['err_msg']='Unknow api. View page:[ ?c=api&a=help ] for help.';
    ajax_echo( json_encode($data));
  }

}
  