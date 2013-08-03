<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);

class jgController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
    $c=g('c');
    $a=g('a');
    $this->data=getAppDataDefault();
    $this->data['nav_items']=array();
    $this->data['nav_items']["?c=$c&a=firstpage"]='首页';
    
    $this->data['css'][]='laolin.metro.box.css';
    
    // 采用theme-1,是深色底的， theme-2,是白底
    //$this->data['css'][]= 'firstpage'==g('a')?'nav-theme-1.css':'nav-theme-2.css';
    $this->data['css'][]=  'nav-theme-2.css';
    
    if('firstpage'==g('a'))$this->data['js']['jquery-cookie']='jquery.cookie.js';
    //$this->data['js'][]='laolin.router.js';
    $this->data['js']['noty']='noty/jquery.noty.js';
    $this->data['js'][]='noty/layouts/top.js';
    $this->data['js'][]='noty/layouts/topCenter.js';
    $this->data['js'][]='noty/layouts/center.js';
    $this->data['js']['noty-bottomCenter']='noty/layouts/bottomCenter.js';
    $this->data['js'][]='noty/layouts/inline.js';
    $this->data['js']['noty-themes']='noty/themes/default.js';
  }
  
  function firstpage(){  
    $this->data['toptitle'] = '结构助手v0.01
        作者:林建萍 同济大学建筑设计研究院（集团）有限公司';
      //error_reporting(E_ALL);
      //uses('home.data.php');
      
      $txt='hello';
      $this->data['main_content']= $txt;
    return render( $this->data );
  } 
  
  

}
  