
    <div class="navbar navbar-inverse navbar-fixed-top" id="opt-navbar-inner">
      
        <div class="container">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="<?php echo $sitelink; ?>"><?php echo $sitename; ?></a>
          <div class="nav-collapse collapse">
            <!--p class="navbar-text pull-right">
              <?php echo $appname ?> 
              <?php if($loginfo) echo  ' | ' . $loginfo ; ?>
            </p-->
            <ul class="nav  navbar-nav">
              <?php  foreach($nav_items as  $item => $v) {
              echo "<li><a href='$item' class=''>$v</a></li>";
                } ?>
            </ul>
          </div>     
        </div>
      
    </div>