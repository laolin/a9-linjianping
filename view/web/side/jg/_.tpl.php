<div class="col-2 col-lg-2 col-sm-2">
<div class="sidebar-nav">
            <ul class="nav nav-pills nav-stacked">
              <?php  foreach($nav_items as  $item => $v) {
              echo "<li><a href='$item' class=''>$v</a></li>";
                } ?>
            </ul>  
</div>
</div><!--/col  -->


            
<script>
<?php echo '_a_="'.g('a').'";_c_="'.g('c').'";_b_="'.v('b').'";';?> ;
      addr=window.location.search||'?c='+_c_+'&a='+_a_;
      $('.navbar .nav a').click( function(){$(this).parent().addClass('active')}) .
        parent().removeClass('active');//全变灰
      $('.navbar .nav a[href="'+addr+'"]').parent().addClass('active');//与当前URL相符的亮显
      $('.sidebar-nav .nav a[href="'+addr+'"]').parent().addClass('active');//与当前URL相符的亮显
</script>
