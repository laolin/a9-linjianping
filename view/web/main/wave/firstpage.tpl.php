<?php
      //echo $main_content ;
?> 
<div class="col-lg-12">

<div id='pages'>

  <article id='page-'>
  <div class="well">
    <h2>欢迎使用 地震波分析工具</h2>
    <p>编写这个的起因为同事有一次需要转换一下地震波数据文件的格式。
    然后由于我手头的电脑上都没有安装任何能在本地运行的编程软件，只好用PHP编写代码，放到我的网站上利用PHP解释器来运行程序。
    <p>接下来我就想顺便编一下计算出来了地震波的弹性时程反应、反应谱。并顺便验证一下自己对一些结构动力学问题的理解对不对。
    <p>结构体系的基础受到地面运动（地震）的激励作用下，<code>伪加速度</code>是指结构体系针对运动的基础的相对加速度。<code>绝对加速度</code>是指结构体系针对静止的大地的加速度。
    <p>事实上编好程序后，我对伪加速度反应谱、绝对加速度反应谱等的理解更乱了。
    
    <h3>我原以为 平常说的<code>反应谱</code> 应该和 <code>伪加速度谱</code>相同，
    结果我却发现 计算出来的<code>绝对加速度谱</code> 才和PKPM内置一些地震波的反应谱比较接近，
    结构动力学书中经典的ELCENTRO波的反应谱也是和我计算出来的<code>绝对加速度谱</code>比较接近。</h3>
    <p>混乱中，不知道是程序编错了，还是哪里理解错了。
    <h2>主要功能：</h2><ul>
    <li>计算指定地震波的弹性时程反应。<code>计算方法：Newmark平均加速度法。</code>
    <li>计算指定地震波的弹性反应谱。<code>计算方法：Newmark平均加速度法。</code>
    </ul>
    <h2>浏览器兼容性</h2>
    <p>建议使用Chrome或Firefox浏览器
    <p>如果您使用IE浏览器，建议使用IE10及以上版本。IE8肯定是不兼容的，IE9似乎基本是兼容的，但有时不正常。
      </p>
    <p><a class="btn btn-primary btn-lg" id="load-it" href='?c=wave&a=wave_ana'>加载地震波分析工具</a></p>
    
  </div>
<script>

laolin.wait.ready(function(){
  laolin.ui.showInfo('欢迎使用地震波分析工具');
  laolin.ui.currentPage='';
  $("#load-it").click(function(){return laolin.app.wave.loadPage('?c=wave&a=wave_ana')});
});
</script>

  </article>
</div><!--pages-->

<p><small>
  如有任何意见或建议，请<a href='http://laolin.com/lin/?p=4763' tarbet='_blank'>到这里留言</a>，谢谢。
  </small>
</p>
</div>