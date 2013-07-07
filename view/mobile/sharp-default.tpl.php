<?php 
$tfile = 'view' . DS  . 'mobile' . DS . g('c') . DS . g('a') . '.tpl.php' ;
//没有做mobile专门的页面，就用web的页面代替
if( !file_exists( AROOT . $tfile ) ) {
  include( AROOT . 'view' . DS  . 'web' . DS . 'sharp-default.tpl.php' );
  return;
}?>
<!DOCTYPE html><!--HTML5 doctype-->
<html>
<head>
<title><?=$top_title?></title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<script type="text/javascript" src="http://lib.sinaapp.com/js/jq.mobi/1.0/jq.mobi.min.js"></script> 
<script type="text/javascript" src="http://lib.sinaapp.com/js/jq.mobi/1.0/jq.ui.min.js"></script> 
</head>
<body>
<div id="jQUi">
<?php 
//$tfile = 'view' . DS  . g('layout') . DS . g('c') . DS . g('a') . '.tpl.html' ;
//if( file_exists( AROOT . $tfile ) ) include( AROOT . $tfile );
 include( AROOT . $tfile );
//else @include( CROOT . $tfile );
?>
</div>
</body>
</html>