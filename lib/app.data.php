<?php
function MetorData() {
$json_rows='
  { "rows":[
    { "height":4, "data":[          
      { "width":6,
        "content":{"color":"blue", "title":"个人简历",
          "text":"<img src=\"http://files.laolin.com/2013/structural-engineering/linjp-2012.9.3-180x180.jpg\"/><br/>林建萍，高级工程师，国家一级注册结构工程师<h2>工作经历</h2>2003.4 至今<br/>  同济大学建筑设计研究院（集团）有限公司 结构工程师<br/>1997.8~2000.8<br/> 福建省莆田市涵江区建设局 公务员<h2>学历</h2>2000.9~2003.3<br/> 同济大学 土木工程学院 结构工程 硕士学习<br/>1993.9~1997.7<br/> 福州大学 土木工程学院 工业与民用建筑 本科学习",
          "link":"./?a=lin&b=index"
          }
      },
      { "width":6, "rows": [  
        { "height":2, "data":[ 
          { "width":6,
            "content":{"color":"green", "title":"结构工程师",
              "text":"<img src=\"http://files.laolin.com/2013/structural-engineering/21030715-structural.jpg\"/>",
              "link":"/lin/?cat=70"
              }
          },
          { "width":6,
            "content":{"color":"green", "title":"团队建设",
              "text":"<img src=\"http://files.laolin.com/2013/structural-engineering/20130715-team.jpg\"/>",
              "link":"/lin/?cat=72"
              }
          }
        ]},
        { "height":2, "data":[
          { "width":6,
            "content":{"color":"green", "title":"编程爱好者",
              "text":"<img src=\"http://files.laolin.com/2013/development/20130715-development.jpg\"/>",
              "link":"/lin/?cat=3"
              }
          },
          { "width":6,
            "content":{"color":"magenta", "title":"生活流水帐",
              "text":"<img src=\"http://files.laolin.com/2013/laolin-family/20130525.laolin.family-200.jpg\"/>",
              "link":"/lin/?cat=2"
              }
          }
        ]}
      ]}
    ]}
    
    
  ]}
';
return $json_rows;
}