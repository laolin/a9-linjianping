<?php 
$tfile = 'view' . DS  . 'ajax' . DS . g('c') . DS . g('a') . '.tpl.php' ;
//û���� ��ҩ ר�ŵ�ҳ�棬����web��ҳ�����Ҫ���� ����
if( !file_exists( AROOT . $tfile ) ) {
  $WEBfile = 'view' . DS  . 'web' . DS . 'main-box.inc.php';
  if( file_exists( AROOT . $WEBfile ) ) include( AROOT . $WEBfile );
  else echo 'NoData.';
  return;
}?>

<div class="cbox">
<img class="close" src="static/img/cross.png" onclick="hide_pop_box();"/>
<?php	
  echo $info;//������ģ��ʱ����ȥCROOT��ģ��
?>
</div>