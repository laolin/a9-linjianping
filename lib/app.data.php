<?php
function MetorData() {
$json_rows='
  { "rows":[
    { "height":2, "data":[            
        { "width":6,
          "content":{"color":"blue", "title":"结构工程师",
            "text":"林建萍，高级工程师，国家一级注册结构工程师<br/>现就职于同济大学建筑设计研究院（集团）有限公司",
            "link":"/lin/?cat=1"
            }
        },           
        { "width":3,
          "content":{"color":"orange", "title":"编程爱好者",
            "text":"林建萍，高级工程师，国家一级注册结构工程师<br/>现就职于同济大学建筑设计研究院（集团）有限公司",
            "link":"/lin/?cat=3"
            }
        },           
        { "width":3,
          "content":{"color":"purple", "title":"生活流水帐",
            "text":"<img src=\"http://files.laolin.com/2013/laolin-family/20130525.laolin.family-200.jpg\"/>",
            "link":"/lin/?cat=2"
            }
        }
    ]},
    { "height":2, "data":[
      { "width":6,
        "content":{"color":"blue", "title":"个人简历",
          "text":"林建萍，高级工程师，国家一级注册结构工程师<br/>现就职于同济大学建筑设计研究院（集团）有限公司<h2>工作经历</h2>2003.4 至今  同济大学建筑设计研究院（集团）有限公司 结构工程师<br/>1997.8~2000.8 福建省莆田市涵江区建设局 公务员<h2>学历</h2>2000.9~2003.3 同济大学 土木工程学院 结构工程 硕士学习<br/>1993.9~1997.7 福州大学 土木工程学院 工业与民用建筑 本科学习",
          "link":"./?a=lin&b=index"}
      },           
      { "width":3,
        "content":{"color":"orange", "title":"编程爱好者",
          "text":"就职于同济大学建筑设计研究院（集团）有限公司",
          "link":"/lin/?cat=2"
          }
      },           
      { "width":3,
        "content":{"color":"purple", "title":"生活流水帐",
          "text":"同济大学建筑设计研究院（集团）有限公司",
          "link":"/lin/?cat=2"
          }
      }
    ]}, 
    { "height":1, "data":[
      { "width":2,
        "content":{"color":"blue", "title":"Structure","text":"Coming soon.","link":"#"}
      },
      { "width":2,
        "content":{"color":"blue", "title":"Apis","text":"Coming soon.","link":"#"}
      },
      { "width":2,
        "content":{"color":"blue", "title":"Photos","text":"Coming soon.","link":"#"}
      },
      { "width":3,
        "content":{"color":"orange", "title":"Photos","text":"Coming soon.","link":"#"}
      },
      { "width":3,
        "content":{"color":"purple", "title":"Photos","text":"Coming soon.","link":"#"}
      }
    ]}
    
  ]}
';
return $json_rows;
}