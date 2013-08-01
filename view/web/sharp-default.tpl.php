<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <title><?php echo $toptitle . ' | ' . $sitename ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="LaoLin">

    <!-- Le styles -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>

    <script src="static/js/jquery-1.8.0.min.js"></script>
    <script src="static/js/underscore-min.js"></script>
    <script src="static/js/backbone-min.js"></script>

    <?php if( isset($css) && is_array( $css ) ): ?>
        <?php foreach( $css as $cfile ): ?><link rel="stylesheet" type="text/css" href="static/css/<?=$cfile?>">
        <?php endforeach; ?>
    <?php endif; ?>
    

    <!-- Fav and touch icons -->
  </head>

  <body>
    <?php @include_once( dirname(__FILE__) ) . DS . 'header.inc.php'; ?>  
 

    <!-- content -->
    <div class="container">
      <div class="row" id="opt-main-box">
      
      <?php  
      $tfile = 'view' . DS  . 'web' . DS . 'side' . DS . g('c') . DS . g('a') . '.tpl.php';
      if( file_exists( AROOT . $tfile ) ) include( AROOT . $tfile );
       ?>

      <?php 
      $tfile = 'view' . DS  . 'web' . DS . 'main' . DS . g('c') . DS . g('a') . '.tpl.php';
      if( file_exists( AROOT . $tfile ) ) include( AROOT . $tfile );
      else @include_once( dirname(__FILE__) ) . DS . 'content.inc.php';
      ?> 
      </div><!--/row-->
    </div><!-- /content -->
      <!-- footer -->
    <div class="container">
      <?php @include_once( dirname(__FILE__) ) . DS . 'footer.inc.php'; ?>
     
        
    </div><!-- /footer -->
    
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/laolin.main.js"></script>
    <script src="static/js/laolin.router.js"></script>
    <script src="static/js/laolin.s_boxes.js"></script>
    
    
    <?php if( isset($js) && is_array( $js ) ): ?>
        <?php foreach( $js as $jfile ): 

        if(strpos($jfile,'://')!=0)
          echo "<script type='text/javascript' src='$jfile' ></script>";
        else
          echo "<script type='text/javascript' src='static/js/$jfile' ></script>";
        endforeach; ?>
  <?php endif; ?>
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