<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);
/*
all apis (actions of api controller) [ ?c=api&a=xxx ]
a0:test
  b1:test(?c=api 或 ?c=api&a=test)默认,用来测试api是否正常运作
a1:wp
  b1:percat(?c=api&a=wp&b=percat&cat=72,77&npost=2)每一指定cat类显示npost篇文章 
a2:static
a3:jg
a4:tools
*/
class apiController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
  }
  
  function test() {
    $data['reply']='LaoLinAPI is ready.';
    echoRestfulData($data);
  }
  function wp() {
    //error_reporting(E_ALL);
    $b=v('b');
    if($b=='percat'){
      $data["err_code"]=0;
      $data["err_msg"]="success";
      $data["data"]=array();
      
      $npost=intval(v('npost'));
      if($npost<1) $npost=2;
      
      $cat=explode(',',v('cat'));
      
      foreach($cat as $cat1) {
        $data[$cat1]=$this->_wp_get_post_by_cat($cat,$npost);
      }
      echoRestfulData($data);
    }
  }
    
  function _wp_get_post_by_cat($cat,$npost) {
    global $post;
    
    $ret=array();
    $posts = get_posts("numberposts=$npost&cat=$cat");
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
    $data['err_msg']='Unknow action';
    ajax_echo( json_encode($data));
  }

}
  