<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <title><?php echo $toptitle . ' | ' . $sitename ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="LaoLin">
    <link href="<?php echo $staticpath; ?>/css/bootstrap.min.css" rel="stylesheet">
    <?php if( isset($css) && is_array( $css ) )
          foreach( $css as $cfile ) {
            if(strpos($cfile,'://')!=0)
              echo "<link href='$cfile' rel='stylesheet'>";
            else
              echo "<link href='$staticpath/css/$cfile' rel='stylesheet'>";
          }
    ?>
    <style type="text/css">
        body {
          padding-top: 50px;
          padding-bottom: 40px;
        }

      @media (max-width: 991px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
     </style>
  <!--[if lt IE 9]><script>console={_:[]};console.log=function(a){console._.push(a)};
  Date.now = function(){return new Date().getTime();}</script><![endif]-->
    <script><?php
    if( file_exists(dirname(__FILE__)  . DS . 'laolin.main.min.js'))
      include_once( dirname(__FILE__)  . DS . 'laolin.main.min.js');
    else
      include_once( dirname(__FILE__)  . DS . 'laolin.main.js');?>
    ;laolin.data.staticpath='<?php echo $staticpath; ?>';
    laolin.wait.begin('wait-jq');
    laolin.wait.js(['http://lib.sinaapp.com/js/jquery/1.8/jquery.min.js']);
      //IE 8这句可能会执行不到，假定N秒内JQ加载完毕
      //所以下面会有一句专门给IE8运行的setTimeout，用于N秒后强制结束'wait-jq'
    laolin.wait.end('wait-jq');
    laolin.wait.ready(function(){
          laolin.wait.begin('wait-js');
          console.log('adding js files');
          laolin.wait.js(['<?php echo $staticpath; ?>/js/bootstrap.min.js'
            , '<?php echo $staticpath; ?>/js/laolin.ui.js'

    <?php if( isset($js) && is_array( $js ) ): ?>
          <?php foreach( $js as $jskey => $jfile ){ 
            if(strpos($jfile,'://')!=0)
              echo "\n,'$jfile'";
            else
              echo "\n,'$staticpath/js/$jfile'";
          }?>
  <?php endif; ?>
          ],function(){laolin.wait.end('wait-js');} );
          console.log('add js files ok.');
    });
    </script>
  <!--[if lt IE 8]><script>laolin.data.IE7=1;</script><![endif]-->
  <!--[if lt IE 9]>
    <script>
    jQTest=100;
    function jQReadyTest(){
      console.log('jQReadyTest:'+jQTest);
      if(jQTest>9999||'undefined'!=typeof($)){
        laolin.wait.endAll();
        //要来两个ready,第二次ready才会加载好laolin.app
        laolin.wait.ready(function(){laolin.wait.ready(function(){laolin.app.fn.oldIE()})});
      }
      else setTimeout(jQReadyTest,jQTest+=100);
    }
    setTimeout(jQReadyTest,jQTest+=100);
    </script>
  <![endif]-->
  </head>

  <body>
    <?php @include_once( dirname(__FILE__) ) . DS . 'header.inc.php'; 
    @include_once( dirname(__FILE__) ) . DS . 'main-box.inc.php'; 
    ?>  

     
    <div class="container" id="footer-box">
      <?php @include_once( dirname(__FILE__) ) . DS . 'footer.inc.php'; ?>
    </div>
    
  <script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-922595-1', 'auto');
  ga('send', 'pageview');
  </script>
  </body>
</html>