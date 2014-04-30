<?php 

if(!$app_name) {
  $app_name=g('c');
}
if(!$app_name) {
  $app_name=v('appname');
}
if(!$app_name) {
  $host_name=$_SERVER['HTTP_HOST'];
  if(substr($host_name,0,4)=='api.'){
    $app_name='api';
  }
}

$GLOBALS['config']['default_controller'] = $app_name;
$GLOBALS['config']['default_action'] = 'firstpage';
$GLOBALS['config']['404_controller'] = $app_name;
$GLOBALS['config']['404_action'] = 'firstpage';
    
switch($app_name) {
  case 'api':
    $GLOBALS['config']['site_name'] = 'LaoLinAPI';
    $GLOBALS['config']['site_domain'] = 'api.LaoLin.com';
    $GLOBALS['config']['default_action'] = 'test';
    $GLOBALS['config']['404_action'] = 'test';
    break;
    
  case 'xiaoxue':
    $GLOBALS['config']['site_name'] = '小学教育';
    break;
  case 'wave':
    $GLOBALS['config']['site_name'] = '地震波助手';
    break;
  case 'jg':
    $GLOBALS['config']['site_name'] = '结构师助手';
    break;
  case 'linjianping':
  default:
    $GLOBALS['config']['site_name'] = '林建萍';
    $GLOBALS['config']['default_controller'] = 'home';
    $GLOBALS['config']['default_action'] = 'firstpage';
    $GLOBALS['config']['404_controller'] = 'home';
    $GLOBALS['config']['404_action'] = 'firstpage';
} //end switch($app_name)
