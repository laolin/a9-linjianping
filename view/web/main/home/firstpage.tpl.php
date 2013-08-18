<div class="col-lg-12">
<?php
      echo $main_content ;
?>
<script>
    laolin.wait.ready(function(){
      laolin.wait.js('<?php echo $staticpath;?>/js/laolin.app.home.js',function(){laolin.app.home.firstPage()});
    });
</script>    
</div>