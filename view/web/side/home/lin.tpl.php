<div class="hidden-sm col-12 col-lg-3 col-sm-3">
<div class="sidebar-nav">
            <ul class="nav nav-pills nav-stacked">
              <?php  foreach($nav_items as  $item => $v) {
              echo "<li><a href='$item' class=''>$v</a></li>";
                } ?>
            </ul>  
</div><!--/.well -->
</div><!--/col 3 -->


            
<script>
      addr=window.location.search||'?a=lin&b=index';
      $('.navbar .nav a').click( function(){$(this).parent().addClass('active')}) .
        parent().removeClass('active');//全变灰
      $('.navbar .nav a[href="'+addr+'"]').parent().addClass('active');//与当前URL相符的亮显
      $('.sidebar-nav .nav a[href="'+addr+'"]').parent().addClass('active');//与当前URL相符的亮显
</script>
