<div class="col-12 col-lg-9 col-sm-9">

              <?php foreach($about_laolin as    $v) {
              echo "<div class='comm-box'><h3>{$v[post_title]}</h3><p>{$v[post_content]}</p></div>";
                } ?>
<script>
    laolin.wait.ready(function(){
      //laolin.ui.showInfo('欢迎光临。',500);
    });
</script>
</div>