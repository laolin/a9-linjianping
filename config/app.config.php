<?php 

$app_name='linjianping';
$host_name=$_SERVER['HTTP_HOST'];
if($host_name=='api.laolin.com'||v('appname')=='api'||g('c')=='api'){
  $app_name='api';
} else if ( v('appname')=='jg'||g('c')=='jg') {
  $app_name='jg';
}


switch($app_name) {
  case 'api':
    $GLOBALS['config']['site_name'] = 'LaoLinAPI';
    $GLOBALS['config']['site_domain'] = 'api.LaoLin.com';


    $GLOBALS['config']['default_controller'] = 'api';
    $GLOBALS['config']['default_action'] = 'test';

    $GLOBALS['config']['404_controller'] = 'api';
    $GLOBALS['config']['404_action'] = 'test';
    break;
  case 'jg':
    $GLOBALS['config']['site_name'] = '结构设计';

    $GLOBALS['config']['default_controller'] = 'jg';
    $GLOBALS['config']['default_action'] = 'firstpage';

    $GLOBALS['config']['404_controller'] = 'jg';
    $GLOBALS['config']['404_action'] = 'firstpage';
    break;
  case 'linjianping':
  default:
    $GLOBALS['config']['site_name'] = '林建萍';
    $GLOBALS['config']['site_domain'] = 'LinJianPing.com';//这个好像没用


    $GLOBALS['config']['default_controller'] = 'home';
    $GLOBALS['config']['default_action'] = 'firstpage';

    $GLOBALS['config']['404_controller'] = 'home';
    $GLOBALS['config']['404_action'] = 'firstpage';
} //end switch($app_name)
