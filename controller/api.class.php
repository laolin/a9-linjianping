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
      case 'byid':
        $data["data"]=array();
        $npost=intval(v('npost'));
        if($npost<1) $npost=9;
        $ids=explode(',',v('id'));
        $data['data'][$cat1]=$this->_wpGetPost(array( 'posts_per_page' => $npost,'post_type' => 'post', 'post__in' => $ids ));
        return echoRestfulData($data);
      case 'pagebyid':
        $data["data"]=array();
        $npost=intval(v('npost'));
        if($npost<1) $npost=9;
        $ids=explode(',',v('id'));
        $data['data'][$cat1]=$this->_wpGetPost(array( 'posts_per_page' => $npost,'post_type' => 'page', 'post__in' => $ids ));
        return echoRestfulData($data);
      case 'pagebyparent':
        $data["data"]=array();
        $npost=intval(v('npost'));
        if($npost<1) $npost=9;
        $parent=intval(v('parent'));
        $data['data'][$cat1]=$this->_wpGetPost(array( 'posts_per_page' => $npost,'post_type' => 'page', 'post_parent' => $parent ));
        return echoRestfulData($data);
    }
    return $this->_UnknowApi();
  }

  //
  function id18(){
    $data['err_code']=0;
    $data["err_msg"]="success";
      /*
      中华人民共和国国家标准 GB 11643-1999
      
      第十八位数字的计算方法为：
      
      1.将前面的身份证号码17位数分别乘以不同的系数。
      从第一      位到第十七位的系数分别为：
      7 9 10 5 8 4 2 1 6 3 7 9 10 5 8 4 2  
      
      2.将这17位数字和系数相乘的结果相加。  
      
      3.用加出来和除以11，看余数是多少？ 
      
      4余数只可能有0 1 2 3 4 5 6 7 8 9 10这11个数字。
      其分别对应的最后一位身份证的号码为
      1 0 X 9 8 7 6 5 4 3 2。  
      
      5.通过上面得知如果余数是2，就会在身份证的第18位数字上出现罗马数字的Ⅹ。
      如果余数是10，身份证的最后一位号码就是2
      */
    $id17=v('id17');
    $n18=$this->_getId18th($id17);
    
    $data['data']['18th']=$n18;
    $data['data']['id17']=$id17;
    $data['data']['id18']=$id17.$n18;
    
    echoRestfulData($data);
  }
  // 计算身份证最后一位
  function _getId18th($n){
    //$i = strlen($n);
    $c = substr($n,0,17);
    $ns = substr($c,0,1) * 7;
    $ns+= substr($c,1,1) * 9;
    $ns+= substr($c,2,1) * 10;
    $ns+= substr($c,3,1) * 5;
    $ns+= substr($c,4,1) * 8;
    $ns+= substr($c,5,1) * 4;
    $ns+= substr($c,6,1) * 2;
    $ns+= substr($c,7,1) * 1;
    $ns+= substr($c,8,1) * 6;
    $ns+= substr($c,9,1) * 3;
    $ns+= substr($c,10,1) * 7;
    $ns+= substr($c,11,1) * 9;
    $ns+= substr($c,12,1) * 10;
    $ns+= substr($c,13,1) * 5;
    $ns+= substr($c,14,1) * 8;
    $ns+= substr($c,15,1) * 4;
    $ns+= substr($c,16,1) * 2;
    $cn = 12 - $ns % 11;
    if ($cn==10) {
      return 'X';
    } elseif ($cn==12) {
      return '1';
    } elseif ($cn==11) {
      return '0';
    }
    return $cn;
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
  