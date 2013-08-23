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
      </div>
    </div></div>