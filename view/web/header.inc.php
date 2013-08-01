<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container">
    <a href="<?php echo $sitelink; ?>" class="navbar-brand"><?php echo $sitename; ?></a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
              <?php  foreach($nav_items as  $item => $v) {
              echo "<li><a href='$item'>$v</a></li>";
                } ?>
      </ul>
    </div>
  </div>
</div>
