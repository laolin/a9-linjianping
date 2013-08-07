<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);

class bs_testController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
    $c=g('c');
    $a=g('a');
    $this->pageTitleTail=' | by:';//林建萍 同济大学建筑设计研究院（集团）有限公司';
    $this->data=getAppDataDefault();
    $this->data['sitelink'] = './?c='.$c;
    $this->data['sitename'] = c('site_name');
    $this->data['nav_items']=array();
    $this->data['nav_items']["?c=$c&a=test_1_css"]='test_1_css';
    $this->data['nav_items']["?c=$c&a=test_2_componets"]='test_2_componets';
    $this->data['nav_items']["?c=$c&a=test_3_js"]='test_3_js';
    
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
    
    $this->data['js'][]='laolin.app.js';
    $this->data['js'][]='laolin.app.jg.js';
  }
  
  function firstpage(){  
    $this->data['toptitle'] = '首页'.$this->pageTitleTail;
      //error_reporting(E_ALL);
      //uses('home.data.php');
      
      $txt='<h2>hello</h2>';
      $this->data['main_content']= $txt;
    return render( $this->data );
  } 
  
  

  function test_1_css() {
    return render( $this->data );
  }
  function test_2_componets() {
    return render( $this->data );
  }
  function test_3_js() {
    return render( $this->data );
  }
}
  