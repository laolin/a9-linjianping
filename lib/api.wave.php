<?php
function apiWaveMain() {
/*
地震波数据文件放在'lib/wave-data/'目录下，
文件格式要求 第一行两个数字，代表数据量，时间间隔，数字间用1个或N个空字符分隔
第二行开始，每行最多20个最多数据，数字间用1个或N个空字符分隔
*/
  $data=array();
  $wavepath=AROOT . 'lib/wave-data/';
  
  
  $b=v('b');
  $js=v('js');
  if(!$js)$js=v('callback');//angular规定必须使用参数callback
  $type=v('type');
  
  $json=0;
  if($js)$json=1;
  else if($type!=='txt')$json=1;// 默认json=1，除非$type=='txt'
    
  //特殊功能，列出所有地震波名字
  if($b=='_list'){
    $filelist=listDir($wavepath);
    sort($filelist,SORT_STRING);
    if($json) {
      echoRestfulData($filelist,$js);
      die;
    }
    $str= 'file list:';
    foreach($filelist as $f){
      $str.= "<br/><a href='.?c=api&a=wave&b=$f'>wave [ $f ]</a>";
    }
    echo $str;
    return;
  }
  
  $data=array();
  $data["err_code"]=0;
  $filename=$wavepath.$b;
  if(strlen($b)<=0||strpos($b,'..')!==false){//为安全起见，不准有两个点，
    $data["err_code"]=1001;
    $data["err_msg"]="Error parameter(1)$b";
    return echoRestfulData($data,$js);
  }
  if(! file_exists($filename)){
    $data["err_code"]=1002;
    $data["err_msg"]="file not exists(2)$b";
    return echoRestfulData($data,$js);
  }
  
  $handle = fopen($filename,"r");

  if (!$handle) {
    $data["err_code"]=1003;
    $data["err_msg"]="file not exists(3)$filename";
    return echoRestfulData($data,$js);
  }
  fscanf($handle," %f %f\n",$count,$dt);
  if($count<10||$dt>1||$dt<0.001){
    $data["err_code"]=1004;
    $data["err_msg"]="Error fileformat(4)$b,$count,$dt";
    return echoRestfulData($data,$js);
  }
  if(!$json){
    header('Content-type: text/plain'); 
    header('Content-Disposition: attachment; filename="'.$b.'.wave.txt"'); 
  }
  //echo "v10,count= $count ,dt= $dt .<pre>";
  $t=$dt;
  $n=0;
  $str='';
  $wdata=array();
  while (!feof($handle)) {
    $buffer = fgets($handle, 4096);
    $w=sscanf($buffer,' %f %f %f %f %f %f %f %f %f %f %f %f %f %f %f %f %f %f %f %f'); 
    //echo $buffer;
    //var_dump($w);
    for($i=0 ; $i<20&&$n<$count ; $i++,$n++,$t+=$dt,$str.="\n"){ //每行20个最多
      if($w[$i]===null)break;//数据不足20个的，后面会出现null
      if(!$json) {
        $str.=round($t,3).','.$w[$i];
      } else {
        $wdata[]=$w[$i];
      }
    }
  }
  fclose($handle);
  if(!$json) {
    echo $str;
  } else {
    $data['count']=$count;
    $data['dt']=$dt;
    $data['data']=$wdata;
    echoRestfulData($data,$js);
  }
}
  
function listDir($dir){
  if(!file_exists($dir)||!is_dir($dir)){
    return '';
  }
  //$dirList=array('dirNum'=>0,'fileNum'=>0);
  $filelist=array();
  $dir=opendir($dir);
  $i=0;
  while($file=readdir($dir)){
    if($file!=='.'&&$file!=='..'){
      /*
      $dirList[$i]['name']=$file;
      if(is_dir($file)){
        $dirList[$i]['isDir']=true;
        $dirList['dirNum']++;
      }else{
        $dirList[$i]['isDir']=false;
        $dirList['fileNum']++;
      }
       // */
      if( ! is_dir($file)){
        $filelist[]=$file;
      }
    };
  };
  closedir($dir);
  return $filelist;
  //return $dirList;
};




