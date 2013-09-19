<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);

class xiaoxueController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
    $c=g('c');
    $a=g('a');
    $this->pageTitleTail=' - 小学生学习助手 | by:林建萍(LaoLin)';
    $this->data=getAppDataDefault();
    $this->data['sitelink'] = '?c='.$c;
    $this->data['sitename'] = c('site_name');
    $this->data['nav_items']=array();
    $this->data['nav_items']["?c=$c&a=yuwen"]='语文';
    $this->data['nav_items']["?c=$c&a=shuxue"]='数学';
    $this->data['nav_items']["?c=$c&a=en"]='英语';
    
    $this->data['css'][]='laolin.metro.box.css';
    
    // theme-1,是深色底的， theme-2,是白底 
    $this->data['css'][]='nav-theme-2.css';
    $this->data['css'][]='laolin.app.xiaoxue.css';
    
    $this->data['js']['jquery-cookie']='jquery.cookie.js';
    $this->data['js']['noty']='noty/jquery.noty.js';
    $this->data['js'][]='noty/layouts/top.js';
    $this->data['js'][]='noty/layouts/topCenter.js';
    $this->data['js'][]='noty/layouts/center.js';
    $this->data['js']['noty-bottomCenter']='noty/layouts/bottomCenter.js';
    $this->data['js'][]='noty/layouts/inline.js';
    $this->data['js']['noty-themes']='noty/themes/default.js';
    
    $this->data['js'][]='laolin.app.js';
  }
  
  function firstpage(){  
    $this->data['toptitle'] = '首页'.$this->pageTitleTail;
      //error_reporting(E_ALL);
      //uses('home.data.php');
      
      $txt='<h2>hello</h2>';
      $this->data['main_content']= $txt;
    return render( $this->data );
  }
  
  function shuxue(){ 
  $b=v('b');
    switch($b){
      case 'ks20':
        $this->data['ks_n']=20;
        return render( $this->data );
      break;
      case 'ks100':
      default:
        $this->data['ks_n']=100;
        return render( $this->data );
    }
  } 

}
  