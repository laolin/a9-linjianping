<?php 
$tfile = 'view' . DS  . 'ajax' . DS . g('c') . DS . g('a') . '.tpl.php' ;
//没有做 草药 专门的页面，就用web的页面的主要内容 代替
if( !file_exists( AROOT . $tfile ) ) {
  $WEBfile = 'view' . DS  . 'web' . DS . 'main-box.inc.php';
  if( file_exists( AROOT . $WEBfile ) ) include( AROOT . $WEBfile );
  else echo 'NoData.';
  return;
}?>

<div class="cbox">
<img class="close" src="static/img/cross.png" onclick="hide_pop_box();"/>
<?php	
  echo $info;//不存在模板时不再去CROOT找模板
?>
</div>