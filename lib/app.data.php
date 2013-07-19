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
$st[]=array("color"=>"green", "title"=>"编程爱好",
              "text"=>"<img src=\"http://files.laolin.com/2013/development/20130715-development.jpg\"/>",
              "link"=>"/lin/?cat=77"
  );
$st[]=array("color"=>"magenta", "title"=>"我爱我家",
              "text"=>"<img src=\"http://files.laolin.com/2013/laolin-family/20130525.laolin.family-200.jpg\"/>",
              "link"=>"/lin/?cat=74"
  );

$jg=array();
$team=array();
$dev=array();
$life=array();
$jg[]=array("color"=>"yellow",
"title"=>"1 title jg",
"text"=>"1 jg cccccontent",
"link"=>"/lin/?cat=70"
);
$jg[]=array("color"=>"yellow",
"title"=>"2 title jg",
"text"=>"2 jg cccccontent",
"link"=>"/lin/?cat=70"
);
$team[]=array("color"=>"red",
"title"=>"1 title team",
"text"=>"1 team cccccontent",
"link"=>"/lin/?cat=70"
);
$team[]=array("color"=>"red",
"title"=>"2 title team",
"text"=>"2 team cccccontent",
"link"=>"/lin/?cat=70"
);
$dev[]=array("color"=>"green",
"title"=>"1 title dev",
"text"=>"1 dev cccccontent",
"link"=>"/lin/?cat=70"
);
$dev[]=array("color"=>"green",
"title"=>"2 title dev",
"text"=>"2 dev cccccontent",
"link"=>"/lin/?cat=70"
);
$life[]=array("color"=>"magenta",
"title"=>"1 title life",
"text"=>"1 life cccccontent",
"link"=>"/lin/?cat=70"
);
$life[]=array("color"=>"magenta",
"title"=>"2 title life",
"text"=>"2 life cccccontent",
"link"=>"/lin/?cat=70"
);

$data_2_1=array($jg[0],$team[0],$jg[1],$team[1]);
$data_2_2=array($dev[0],$life[0],$dev[1],$life[1]);


$rows_page=array();
  $rows_page['rows']=array();
  $rows_page['rows'][0]=array( 
    'height'=>4,
    'data'=>array(
      array('width'=>6,'content'=>$st_main[0]),
      array('width'=>6,'rows'=>four_box($st,2))
    )
  );
  $rows_page['rows'][1]=array( 
    'height'=>2,
    'data'=>array(
      array('width'=>6,'rows'=>four_box($data_2_1,1)),
      array('width'=>6,'rows'=>four_box($data_2_2,1))
    )
  );
    
return $rows_page;
}