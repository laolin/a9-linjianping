<div class="col-12 col-lg-9 col-sm-9"><div class=" ">

              <?php foreach($about_laolin as    $v) {
              echo "<div class='comm-box'><h3>{$v[post_title]}</h3><p>{$v[post_content]}</p></div>";
                } ?>
            
</div></div>
       
<script>
  $(function(){
    laolin.wait.ready(function(){
      //laolin.ui.showInfo('欢迎光临。',500);
    });
    laolin.wait.end('init');//laolin.wait.begin('init')在sharp-default中
  });
</script>