<div class="col-10 col-sm-10 col-lg-10">
<?php
      echo $main_content ;
?>

<script>
$(function(){
  laolin.wait.ready(function(){
   
    laolin.ui.showInfo('梁截面计算',8000);
  
  });
  laolin.wait.end('init');
});
</script>    
</div>