<div class="col-12 col-lg-9 col-sm-9">

              <?php foreach($about_laolin as    $v) {
              echo "<div class='comm-box'><h3>{$v[post_title]}</h3><p>{$v[post_content]}</p></div>";
                } ?>
<script>
    laolin.wait.ready(function(){
      /* /laolin.ui.showInfo('欢迎光临。',500);
      $('.sidebar-nav .nav li a[href^="?a=lin&"]').click(function(){
        laolin.ui.ajaxPage.load($(this).attr('href'),"#main-box >");
        return false;
      });*/
    page=laolin.ui.ajaxPage.loadingPage||laolin.ui.ajaxPage.current;
    $('.nav li').removeClass('active');
    $('.nav li a[href="'+page+'"]').parent().addClass('active');

    });
</script>
</div>