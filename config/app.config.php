<?php 

$app_name='linjianping';
$host_name=$_SERVER['HTTP_HOST'];
if($host_name=='api.laolin.com'||v('appname')=='api'||g('c')=='api'){
  $app_name='api';
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
  case 'linjianping':
    $GLOBALS['config']['site_name'] = '林建萍';
    $GLOBALS['config']['site_domain'] = 'LinJianPing.com';


    $GLOBALS['config']['default_controller'] = 'home';
    $GLOBALS['config']['default_action'] = 'firstpage';

    $GLOBALS['config']['404_controller'] = 'home';
    $GLOBALS['config']['404_action'] = 'firstpage';
  default:
} //end switch($app_name)
