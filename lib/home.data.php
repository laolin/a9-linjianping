<?php

function four_box($four_data,$height=1){
  $n_row=2;
  $n_col=2;
  $width=intval(12/$n_col);//bootstrap 总宽12列

  $row1=array();
  for($i=0;$i<$n_row;$i++) {
    $row1[$i]=array();
    $row1[$i]['height']=$height;
    $row1[$i]['data']=array();
    for($j=0;$j<$n_col;$j++) {
      $row1[$i]['data'][$j]=array(
        'width'=>$width,
        'content'=>$four_data[$i*$n_row+$j]
      );
    }
  }
  return $row1;
}
function MetorData() {
$st_main=array();
$st=array();
    //error_reporting(E_ALL);

$st_main[0]=array("color"=>"blue", "title"=>"个人简历",
          "text"=>"<img title=\"林建萍 高级工程师，国家一级注册结构工程师 同济大学建筑设计研究院（集团）有限公司\" src=\"http://files.laolin.com/2013/structural-engineering/linjp-2012.9.3-180x180.jpg\"/><br/>林建萍，高级工程师，国家一级注册结构工程师<h2>工作经历</h2>2003.4 至今<br/>同济大学建筑设计研究院（集团）有限公司 结构工程师<br/>1997.8~2000.8<br/> 福建省莆田市涵江区建设局 公务员<h2>学历</h2>2000.9~2003.3<br/> 同济大学 土木工程学院 结构工程 硕士学习<br/>1993.9~1997.7<br/> 福州大学 土木工程学院 工业与民用建筑 本科学习",
          "link"=>"./?a=lin&b=index"
          );
$st[0]=array("color"=>"yellow", "title"=>"结构工程",
              "text"=>"<img src=\"http://files.laolin.com/2013/structural-engineering/21030715-structural.jpg\"/>",
              "link"=>"/lin/?cat=70"
  );
$st[]=array("color"=>"red", "title"=>"团队建设",
              "text"=>"<img src=\"http://files.laolin.com/2013/structural-engineering/20130715-team.jpg\"/>",
              "link"=>"/lin/?cat=72"
  );
$st[]=array("color"=>"green", "title"=>"老林编程",
              "text"=>"<img src=\"http://files.laolin.com/2013/development/20130715-development.jpg\"/>",
              "link"=>"/lin/?cat=77"
  );
$st[]=array("color"=>"magenta", "title"=>"我爱我家",
              "text"=>"<img src=\"http://files.laolin.com/2013/laolin-family/20130525.laolin.family-200.jpg\"/>",
              "link"=>"/lin/?cat=82"
  );
  $npost=2;
  $url="http://api.laolin.com/v1.0/?c=api&a=wp&b=percat&npost=$npost&cat=70,72,77,82";
  
  $rest=file_get_contents($url);
  $res=json_decode($rest,true);
  $jg=$res['data'][70];
  $team=$res['data'][72];
  $dev=$res['data'][77];
  $life=$res['data'][82];
  
  for($i=0; $i < $npost; $i++) {
    $jg[$i]["color"]="blue";
    $team[$i]["color"]="blue";
    $dev[$i]["color"]="green";
    $life[$i]["color"]="magenta";
  }

$data_2_1=array($jg[0],$team[0],$jg[1],$team[1]);
$data_2_2=array($dev[0],$life[0],$dev[1],$life[1]);


$rows_page=array();
  $rows_page['rows']=array();
  $rows_page['rows'][0]=array( 
    'height'=>6,
    'data'=>array(
      array('width'=>6,'content'=>$st_main[0]),
      array('width'=>6,'rows'=>four_box($st,3))
    )
  );
  $rows_page['rows'][1]=array( 
    'height'=>2,
    'data'=>array(
      array('width'=>6,'rows'=>four_box($data_2_1,2)),
      array('width'=>6,'rows'=>four_box($data_2_2,2))
    )
  );
return $rows_page;
}