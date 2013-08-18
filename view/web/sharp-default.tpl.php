<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <title><?php echo $toptitle . ' | ' . $sitename ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="LaoLin">

    <!-- Le styles -->
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

    
    <script><?php
    if( file_exists(dirname(__FILE__)  . DS . 'laolin.main.min.js'))
      include_once( dirname(__FILE__)  . DS . 'laolin.main.min.js');
    else
      include_once( dirname(__FILE__)  . DS . 'laolin.main.js');?>
    ;
    laolin.wait.begin('wait-jq');
    laolin.wait.js(['http://lib.sinaapp.com/js/jquery/1.8/jquery.min.js'],function(){
      laolin.wait.end('wait-jq');
      //IE 8这句可能会执行不到，假定2秒内JQ加载完毕
      //所以下面有一句setTimeout，用于 2秒后强制结束'wait-jq'
    });
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
  <!--[if lt IE 9]>
    <script>setTimeout(function(){laolin.wait.endAll();},2000);
    laolin.wait.ready(function(){laolin.app.fn.oldIE()});</script>
  <![endif]-->
  </head>

  <body>
    <?php @include_once( dirname(__FILE__) ) . DS . 'header.inc.php'; ?>  
 

    <!-- content -->
    <div id="main-box"><div class="container">
      <div class="row" id="opt-main-box">
      
      <?php 
      
      $tfile = 'view' . DS  . 'web' . DS . 'side' . DS . g('c') . DS . g('a') . '.tpl.php';
      $tfile_def = 'view' . DS  . 'web' . DS . 'side' . DS . g('c') . DS . '_' . '.tpl.php';
      if( file_exists( AROOT . $tfile ) ) include( AROOT . $tfile );
      else if( file_exists( AROOT . $tfile_def ) ) include( AROOT . $tfile_def );
       ?>

      <?php 
      $tfile = 'view' . DS  . 'web' . DS . 'main' . DS . g('c') . DS . g('a') . '.tpl.php';
      if( file_exists( AROOT . $tfile ) ) include( AROOT . $tfile );
      else @include_once( dirname(__FILE__) ) . DS . 'content.inc.php';
      ?> 
      </div><!--/row-->
    </div></div><!-- /content -->
      <!-- footer -->
    <div class="container" id="footer-box">
      <?php @include_once( dirname(__FILE__) ) . DS . 'footer.inc.php'; ?>
     
        
    </div><!-- /footer -->
    
  <script type="text/javascript">
  if('127.0.0.1' != document.location.host && !_gaq){var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-922595-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();}
</script>
  </body>
</html>