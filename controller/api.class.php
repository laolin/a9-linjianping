<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);
/*
all apis (actions of api controller) [ ?c=api&a=xxx ]
0:test
1:wp
2:static
3:jg
4:tools
*/
class apiController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
  }
  
  function test() {
    $data['reply']='API is ready.';
    echoRestfulData($data);
  }
  function wp() {
    //error_reporting(E_ALL);
    $b=v('b');
    if($b=='bycat'){
      $npost=intval(v('npost'));
      if($npost<1) $npost=2;
      $cat=intval(v('cat'));
      if($cat<1) $cat=1;
      $this->_wp_get_post_by_cat($cat,$npost);
    }
  }
    
  function _wp_get_post_by_cat($cat,$npost) {
    global $post;
    $data['data']=array();
    $posts = get_posts("numberposts=$npost&cat=$cat");
    foreach ($posts as $post) {
      //print_r($post);
      $d1=array();
      setup_postdata($post); 
      $d1['title']=get_the_title();    
      $d1['text']=get_the_excerpt();
      $d1['link']=get_permalink();
      $data['data'][]=$d1;
    }

    echoRestfulData($data);
  }
  function _UnknowApi() {
    $data['err_code']=2001;
    $data['err_msg']='Unknow action';
    ajax_echo( json_encode($data));
  }

}
  