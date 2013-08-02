<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
error_reporting(0);

class homeController extends appController
{
  private $data;
  function __construct()
  {
    parent::__construct();
    
    $this->data=getAppDataDefault();
    $this->data['nav_items']=array();
    $this->data['nav_items']["?a=lin&b=index"]='简介';
    $this->data['nav_items']["?a=lin&b=projects"]='工程项目';
    $this->data['nav_items']["?a=lin&b=awards"]='获奖情况';
    $this->data['nav_items']["?a=lin&b=publications"]='发表论文';
    $this->data['nav_items']["?a=lin&b=hobbies"]='兴趣爱好';
    $this->data['nav_items']["?a=lin&b=contact"]='联系方式';
    $this->data['nav_items']["?a=lin&b=sites"]='老林系列';
    $this->data['nav_items']["http://laolin.com/lin/"]='BLOG';
    
    $this->data['css'][]='comm-box.css';
    $this->data['css'][]='laolin.metro.box.css';
    
    //firstpage采用theme-1,是深色底的，其他采用theme-2,是白底
    $this->data['css'][]= 'firstpage'==g('a')?'nav-theme-1.css':'nav-theme-2.css';
    
    //$this->data['js'][]='underscore-min.js';
    //$this->data['js'][]='backbone-min.js';
    if('firstpage'==g('a'))$this->data['js']['jquery-cookie']='jquery.cookie.js';
    //$this->data['js'][]='laolin.main.js';
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
    $this->data['toptitle'] = '林建萍'.
      ($_SERVER['HTTP_HOST']=='laolin.com'?'(LaoLin)':'') . 
        ' 同济大学建筑设计研究院（集团）有限公司 高级工程师 一级注册结构工程师';
      //error_reporting(E_ALL);
      uses('home.data.php');
      $d_rows=MetorData();
      $txt=$this->_show_metro_box($d_rows);
      $this->data['main_content']= $txt;
    return render( $this->data );
  }
  function lin()
  {
  
    $b=v('b');
    switch($b) {
        //使用lazyRest的API，直接读wordpress的指定 页面的数据
      case 'contact':
        //我的Wordpress的联系页面的ID为4168
        $this->_showSomePost('ID=4168','联系方式');
        break;
      
      case 'projects':
        $this->_showSomePost('ID=4161','工程项目');
        break;
      case 'awards':
        $this->_showSomePost('ID=4163','获奖情况');
        break;
      case 'publications':
        $this->_showSomePost('ID=4165','发表论文');
        break;
      case 'hobbies':
        $this->_showSomePost('ID=4180','兴趣爱好');
        break;
      case 'sites':
        $this->_showLaolinSites();
        break;
      case 'index':
      default:      
        //使用lazyRest的API，直接读wordpress的指定page的全部子页面的数据
        //我的Wordpress的简历页面的ID为4132,这个页面内容没有用
        //所有的子页面对应简历的一个内容, 这些会由LazyREST api返回给本页面JSON数据
        $this->_showSomePost('post_parent=4132&post_status=publish','简介,简历');
    }
  }
  function _show_metro_box($main_rows){
    $str='';
    foreach($main_rows['rows'] as $r) {
      $str.="\n<div class='row metbox-row metbox-row-s{$r['height']}'>";
      foreach($r['data'] as $item){
        if(isset($item['rows'])){//递归
          $str.="\n<div class='col-12 col-sm-{$item['width']} col-lg-{$item['width']}'>";
          $str.=$this->_show_metro_box($item);
          $str.="\n</div>";
        }else{//TODO:错误处理
          $str.="\n<span class='col-12 col-sm-{$item['width']} col-lg-{$item['width']}'><b class='metbox metbox-{$item['content']['color']}'>";
          $str.="\n<h2><a href='{$item['content']['link']}'>{$item['content']['title']}</a></h2>";
          $str.="\n{$item['content']['text']}";
          $str.="\n</b></span>";
        }
      }
      $str.="\n</div>";
    }
    return $str;
  }
  function _showLaolinSites(){
    $this->data['toptitle'] = 'Laolin系列网站';
    $this->data['about_laolin']=array();
    $this->data['about_laolin'][]=array(
        'post_title'=>'老林系列网站',
        'post_content'=>'<ol>
            <li><a href="http://Laolin.com">Laolin.com (老林)</a></li>
            <li><a href="http://LinJianPing.com">LinJianPing.com (林建萍)</a></li>
            <li><a href="http://laolin.info">laolin.info</a></li>
            <li><a href="http://iTongji.org">iTongji.org (i同济)</a></li>
            <li><a href="http://TongJiAD.com">TongJiAD.com (同济AD)</a></li>
            <li><a href="http://PingLiPou.com">PingLiPou.com (平立剖)</a></li>
            <li><a href="http://AnQiuXiang.com">AnQiuXiang.com</a></li>
            <li><a href="http://PKPMP.com">PKPMP.com</a></li>
            </ol>
        ');
    $this->data['about_laolin'][]=array(
        'post_title'=>'友情链接网站',
        'post_content'=>'<ol>
            <li><a href="http://13950773388.com">13950773388.com(仙龙山古典家具)</a></li>
            <li><a href="http://xianlongshan.com">XianLongShan.com(仙龙山古典家具)</a></li>
            <li><a href="http://wendayiliao.com">WenDaYiLiao.com(文达医疗)</a></li>
            <li><a href="http://DLMUPT.com">DLMUPT.com</a></li>
            </ol>
        ');

    
    return render( $this->data );
  }
  function _showSomePost($query,$title){
    $this->data['toptitle'] = $title;
  
    //使用lazyRest的API，直接读wordpress的指定 条件 页面或文章,
    //会由LazyREST api返回给本页面JSON数据
    //（LazyRest api系统在另外的APP里实现）
    //REST api输入参数id=4168
    //REST api输出字段post_content, post_title, menu_order
    $url='http://api.laolin.com/rest/api/wp4_posts/list/'.$query;
    
    
    $rest=file_get_contents($url);
    $res=json_decode($rest,true);
    
    if($res['err_code']!=0) {
      $this->data['about_laolin'][]=
          array('post_content'=>'Error: ['.$res['err_code'].'] '.$res['err_msg']);
    } else {
      $this->data['about_laolin']=$res['data']['items'];
       foreach ($this->data['about_laolin'] as $key => $row) {
        $menu_order[$key]  = +$row['menu_order'];
        $this->data['about_laolin'][$key]['post_content']=nl2br($row['post_content']);
      }
      array_multisort($menu_order, SORT_ASC, $this->data['about_laolin']);
    }
    return render( $this->data );
  }  
  
  
  

}
  