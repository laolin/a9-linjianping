<?php
function MetorData() {
$json_rows='
  { "rows":[
    { "height":3, "data":[        
        { "width":8,
          "content":{"color":"blue", "title":"林建萍简介",
            "text":"<img src=\"http://files.laolin.com/images/linjp-2012.9.3-180x180.jpg\"/><br/>林建萍，高级工程师，国家一级注册结构工程师<br/>现就职于同济大学建筑设计研究院（集团）有限公司",
            "link":"./?a=lin&b=index"
            }
        },
        { "width":4, "rows":[
        
            { "height":1, "data":[
              { "width":6,
                "content":{"color":"purple", "title":"老林微博","text":"老林的新浪微博 @LaolinCom","link":"http://weibo.com/n/laolincom"}
              },
              { "width":6,
                "content":{"color":"red", "title":"老林日记","text":"老林的生活的点点滴滴的零零散散的记录","link":"http://laolin.com/lin/"}
              }
            ]},
            { "height":2, "data":[
              { "width":6,
                      "content":{"color":"blue", "title":"工作经历",
                        "text":"2003.4 至今  同济大学建筑设计研究院（集团）有限公司 结构工程师<br/><br/>1997.8~2000.8 福建省莆田市涵江区建设局 公务员",
                        "link":"./?a=lin&b=index"}
              },
              { "width":6,
                "content":{"color":"blue", "title":"学历",
                  "text":"2000.9~2003.3 同济大学 土木工程学院 结构工程 硕士学习<br/><br/>1993.9~1997.7 福州大学 土木工程学院 工业与民用建筑 本科学习",
                  "link":"./?a=lin&b=index"}
              }
            ]}
            
        ]}
    ]}, 
    { "height":1, "data":[
      { "width":2,
        "content":{"color":"teal", "title":"Structure","text":"Coming soon.","link":"#"}
      },
      { "width":2,
        "content":{"color":"teal", "title":"Apis","text":"Coming soon.","link":"#"}
      },
      { "width":2,
        "content":{"color":"teal", "title":"Photos","text":"Coming soon.","link":"#"}
      },
      { "width":2,
        "content":{"color":"teal", "title":"Videos","text":"Coming soon.","link":"#"}
      },
      { "width":4, "rows":[     
        { "height":1, "data":[
          { "width":6,
            "content":{"color":"red", "title":"Apps","text":"Coming soon.","link":"#"}
          },
          { "width":6,
            "content":{"color":"purple", "title":"Downloads","text":"Coming soon.","link":"#"}
          }
        ]}
      ]}
    ]}
    
  ]}
';
return $json_rows;
}