<div class="col-12 col-sm-10 col-lg-10">
<?php
      //echo $main_content ;
?>
<h2>JavaScript</h2>


<!-- Carousel    -->  
<div class="panel panel-info">
  <div class="panel-heading"> Carousel   </div>
</div>

<!-- Collapse   -->  
<div class="panel panel-info">
  <div class="panel-heading"> Collapse  </div>
  
  
  <div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Collapsible Group Item #1
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"
        accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"
        accordion-toggle"accordion-toggle"accordion-toggle"accordion-toggle"
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        lapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group Itlapsible Group It
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
        Collapsible Group Item #3
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
        psible Group Item #psible Group Item #
        psible Group Item #psible Group Item #psible Group Item #psible Group Item #psible Group Item #psible Group Item #psible Group Item #psible Group Item #
        psible Group Item #psible Group Item #psible Group Item #
      </div>
    </div>
  </div>
</div>
  
  
</div>

<!-- alert   -->  
<div class="panel panel-info">
  <div class="panel-heading"> alert  </div>
  <h3>说明文档说得不是很清楚，这就一个关闭按钮？？</h3>
<div>
aasdfasdf 按右边的关闭按钮
<a class="close" data-dismiss="alert" href="#">&times;</a>
</div>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>

 按下面Popovers右边的关闭按钮：

</div>


<!-- Popovers   -->  
<div class="panel panel-info">
  <div class="panel-heading"> Popovers
  </div>

<a class="close" data-dismiss="alert" href="#">&times;</a>
<h2>为什么popover显示不正常，
<a href="javascript:$('[data-toggle=popover]').popover({container: 'body'})"
data-toggle="tooltip"
title="$('[data-toggle=popover]').popover({container: 'body'})"
>
点击这里执行一下</code>$('[data-toggle=popover]').popover({container: 'body'})</code>才会正常显示。
</a></h2>

    <h3>Live demo</h3>
    <div class="bs-example" style="padding-bottom: 24px;">
      <a href="#" class="btn btn-large btn-danger" data-toggle="popover" title="" data-content="And here&#39;s some amazing content. It&#39;s very engaging. right?" data-original-title="A Title">Click to toggle popover</a>
    </div>
    
    
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on left
        </button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on top
        </button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on bottom
        </button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on right
        </button>
        
        
</div>


<!-- Tooltips  -->  
<div class="panel panel-info">
  <div class="panel-heading"> Tooltips </div>
    
<ul>
<li>Tooltips <code>data-toggle="tooltip"</code>
</ul>

<h2>为什么tooltip显示不正常，
<a href="javascript:$('[data-toggle=tooltip]').tooltip({container: 'body'})"
data-toggle="tooltip"
title="$('[data-toggle=tooltip]').tooltip({container: 'body'})"
>
点击这里执行一下</code>$('[data-toggle=tooltip]').tooltip({container: 'body'})</code>才会正常显示。
</a></h2>

<a href="#" data-toggle="tooltip" title="first tooltip">Hover over me</a>


        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>

<button type="button" class="btn btn-info" data-trigger='click' data-toggle="tooltip" data-placement="top" title="Tooltip on top">Click for Tooltip on top</button>

</div>


<!-- modal -->  
<div class="panel panel-info">
  <div class="panel-heading"> modal</div>
    
<ul>
<li>a 或  button 指定<code>data-toggle="modal"</code>
<li>button 要同时指定 <code>data-target="#foo" </code>
<li>a 要同进指定<code>href="#foo"</code>
</ul>

  <button type="button" data-toggle="modal" data-target="#myModal">Launch modal</button>
    <a data-toggle="modal" href="#myModal"  >Launch demo modal</a>

    
  <a data-toggle="modal" href="#myModal2" class="btn btn-primary btn-large">Launch demo modal 2</a>
    <a data-toggle="modal" href="#myModal2"  >Launch demo modal 2</a>

  
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


  
<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title 2</h4>
      </div>
      <div class="modal-body">
        <p>2 2 2 2 2 2 2   AAAAAAAAAAAA</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



</div>


<script>
$(function(){
  laolin.wait.ready(function(){
   
    laolin.ui.showInfo('JavaScript',600);
  });
  laolin.wait.end('init');
});
</script>    
</div>