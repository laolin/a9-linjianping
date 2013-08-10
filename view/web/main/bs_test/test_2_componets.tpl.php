<div class="col-12 col-sm-10 col-lg-10">
<?php
      //echo $main_content ;
?>

<!-- LIST GROPUP    -->  
    <h3 id=""> panel With list groups</h3>
    <p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>

<div class="panel">
  <div class="panel-heading">LIST GROPUP 2 </div>
  a af adf asdf dsa fdsaf asd fa
  
<ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Cras justo odio</li>
</ul>
</div>


    
     
      <div class="panel  panel-danger">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

        <!-- List group -->
        <ul class="list-group">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
      





<div class="panel">
  <div class="panel-heading">LIST GROPUP </div>
  LIST GROPUP现在不能随便放在panel里了，放在里面会被当做同一级别的列表，(见头顶上2个例子)，对我们这个例子显示效果就乱了
</div>

  <div class='row'><div class='col-lg-4'>
<ul class="list-group">
  <li class="list-group-item">1(w=4) Cras justo odio</li>

  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item active">.active 这里无效</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>

  </div><div class='col-lg-2'>
  
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">14</span>
    2(w=2) Cras justo odio
  </li>
  <li class="list-group-item active">
    <span class="badge">14</span>
    .active 这里无效
  </li>
  <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
</ul> 
  
  </div><div class='col-lg-6'>
  
<div class="list-group">
  <a href="#" class="list-group-item active">
    <span class="badge">14</span>Cras justo odio
  </a>
  <a href="#" class="list-group-item"><span class="badge">14</span>Dapibus  ac facilisis ac facilisis ac facilisis ac facilisis ac facilisisac facilisis ac facilisis ac facilisis in
  </a>
  <a href="#" class="list-group-item">Morbi leo risus
  </a>
  <a href="#" class="list-group-item">Porta ac consectetur ac
  </a>
  <a href="#" class="list-group-item">Vestibulum at eros
  </a>
  
  
  
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">class="list-group-item-heading"<span class="badge">45</span></h4>
    <p class="list-group-item-text"><span class="badge">58</span>class="list-group-item-text"</p>
  </a>
  
  <a href="#" class="list-group-item ">
    <h4 class="list-group-item-heading">class="list-group-item-heading"</h4>
    <p class="list-group-item-text">class="list-group-item-text"</p>
  </a>
  <a href="#" class="list-group-item active">
    <h1 class="list-group-item-heading">class="list-group-item-heading"</h1>
    <p class="list-group-item-text">class="list-group-item-text"</p>
  </a>
  
  <a href="#" class="list-group-item ">
    <h2 class="list-group-item-heading">class="list-group-item-heading"</h2>
    <p class="list-group-item-text">class="list-group-item-text"</p>
  </a>
</div>
  
  
  </div></div>



<!-- Progress  -->  
<div class="panel  panel-danger">
  <div class="panel-heading">Progress </div>
  <strong>IE8也基本支持</strong>
  
  <div class="progress progress-striped active ">
    <div class="progress-bar" style="width: 60%;"></div>
  </div>
  <div class="progress progress-striped">
    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
  </div>
  <div class="progress progress-striped">
    <div class="progress-bar" style="width: 3%;"></div>
  </div>
  <div class="progress">
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 40%">40</div>
    <div class="progress-bar progress-bar-warning" style="width: 10%">10</div>
    <div class="progress-bar progress-bar-info" style="width: 20%">20</div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
  </div>

</div>

<!-- alert -->  
<div class="panel">
  <div class="panel-heading">alert lert-link</div>
  <div class='row'>
  
  <div class="col-lg-3 alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> Best check yo self, you're not looking too good.
    <a href="#" class="alert-link">link text</a>
  </div>
  
  <div class="col-lg-3 alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>danger!</strong> dangerdangerdanger dangerdanger danger danger danger.
    <a href="#" class="alert-link">link text</a>
  </div>
  <div class="col-lg-3 alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>success!</strong> Best success ssuccess ssuccess ssuccess you ssuccess good.
    <a href="#" class="alert-link">link text</a>
  </div>
  <div class="col-lg-3 alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>info!</strong> Best info info Best info info Best info info Best info info .
    <a href="#" class="alert-link">link text</a>
    <a href="#" class="xalert-link">link text2</a>
  </div>


  </div>
</div>

<!-- label -->  
<div class="panel">
  <div class="panel-heading">class="label label-success"/ Badges,empty:Self collapsing</div>
  
  <span class="label">Default</span>
  <span class="label label-success">Success</span>
  <span class="label label-warning">Warning</span>
  <span class="label label-danger">Danger</span>
  <span class="label label-info">Info</span>
  
  <span class="label">Default</span>
  <span class="label label-success">Success<span class="badge">42</span></span>
  <span class="label label-warning">Warning<span class="badge">42</span></span>
  <span class="label label-danger">Danger<span class="badge">42</span></span>
  <span class="label label-info">with normal badge<span class="badge">42</span></span>
  <span class="label label-info">with empty badge<span class="badge"></span></span>
</div>

<!-- bt group -->  
<div class="panel">
  <div class="panel-heading"></div>
  
<div class='row'><div class='col-lg-7'>

<div class="input-group">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">GoA!</button>
  </span>
  <span class="input-group-addon">梁高</span>
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">GoB!</button>
  </span>
  <input type="text" class="form-control">
  <span class="input-group-addon">mm,梁宽</span>
  <input type="text" class="form-control">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">Go!</button>
  </span>
</div>
</div><div class='col-lg-5'>
<div class="input-group">
  <span class="input-group-addon">mm</span>
  <input type="text" class="form-control">
  <span class="input-group-btn">
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Go!2</button>
    <ul class="dropdown-menu pull-right">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </span>
  <input type="text" class="form-control">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">Go!</button>
  </span>
</div>
</div>

</div><!--/panel-->




<hr/>
<div class="panel">
  <div class="panel-heading">Split button dropdowns</div>

<!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-default">Action123</button>
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

<!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary">Action</button>
  <div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
    </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
  </div>
</div>

</div><!--/panel-->


<div class="panel">
  <div class="panel-heading">btn-toolbar </div>
  
<br/>  
btn size:
      <a class="btn btn-primary btn-large">primary</a>
      <a class="btn btn-success">success</a>
      <a class="btn btn-warning btn-small">warning</a>
<br/>  
justified (只能用 a):
  <div class="btn-group btn-group-justified">
      <a class="btn btn-primary">primary</a>
      <a class="btn btn-success">success</a>
      <b class="btn-group">
    <a class="btn btn-warning" data-toggle="dropdown">warning</a>
    
        <ul class="dropdown-menu">
          <li><a href="#">EE 1 CC</a></li>
          <li><a href="#">EE link 2 BB</a></li>
          <li class="divider"></li>
          <li><a href="#">E bbb 3 AA</a></li>
        </ul>
    </b>
      <a class="btn btn-danger">danger  </a>      
  </div>

<br/>  
justified (只能用 a):
  <div class="btn-group btn-group-justified">
      <a class="btn btn-primary">primary</a>
      <a class="btn btn-success">success</a>
      <a class="btn btn-warning">warning</a>
      <a class="btn btn-danger">danger  </a>      
  </div>
  
  
<br/>
dropUP menu btn:
  <div class="btn-group dropup">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    bbbbbbb <span class="caret"></span>
  </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link 1 CC 2</a></li>
          <li><a href="#">Dropdown link 2 BB</a></li>
          <li><a href="#">Dropdown link 3 AA</a></li>
        </ul>
  </div>
<br/>
dropdown menu btn:
  <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    bbbbbbb <span class="caret"></span>
  </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link 1 CC 2</a></li>
          <li><a href="#">Dropdown link 2 BB</a></li>
          <li><a href="#">Dropdown link 3 AA</a></li>
        </ul>
  </div>
<br/>
dropdown menu:
  <div class="btn-group open">
  <a data-toggle="dropdown" href="#">aaaaaaaaAAAAAAA</a>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link 1 CC</a></li>
          <li><a href="#">Dropdown link 2 BB</a></li>
          <li><a href="#">Dropdown link 3 AA</a></li>
        </ul>
  </div>
  
<br/>
btn-group:

  <div class="btn-toolbar">
    <div class="btn-group">
      <button type="button" class="btn btn-info">info</button>
      <button type="button" class="btn btn-primary">primary</button>
      <button type="button" class="btn btn-success">success</button>
      <button type="button" class="btn btn-warning">warning</button>
      <button type="button" class="btn btn-danger">danger</button>
      <button type="button" class="btn btn-default">default</button>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
    <div class="btn-group-vertical">
      <button type="button" class="btn btn-info">info</button>
      <button type="button" class="btn btn-primary">primary</button>
      <button type="button" class="btn btn-success">success</button>
      <button type="button" class="btn btn-warning">warning</button>
      <button type="button" class="btn btn-danger">danger</button>
      <button type="button" class="btn btn-default">default</button>
    </div>
  </div>
 
</div><!--/panel-->



<!-- toolbar -->
<div class="panel">
  <div class="panel-heading">btn- types</div>
<div class="btn-group">
  <button type="button" class="btn btn-info">info</button>
  <button type="button" class="btn btn-primary">primary</button>
  <button type="button" class="btn btn-success">success</button>
  <button type="button" class="btn btn-warning">warning</button>
  <button type="button" class="btn btn-danger">danger</button>
  <button type="button" class="btn btn-default">default</button>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-link">btn-link</button>
</div>
</div><!--/panel-->
<!-- /toolbar -->



<div class="panel">
  <div class="panel-heading">menu </div>
<div>
    <span class="btn-group">
      【1】 
        <a data-toggle="dropdown" href="#">Dropdown trigger</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
          <li class="dropdown-header">Dropdown header1</li>
          <li><a tabindex="-1" href="#">Action1</a></li>
          <li><a tabindex="-1" href="#">Another 1 action</a></li>
          <li><a tabindex="-1" href="#">Something 1 else here</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header 1</li>
          <li><a tabindex="-1" href="#">Separated link 1</a></li>
        </ul> 
    </span> 
      
    <span  class="btn-group">
      【2】
      <span class="dropdown xxxopen">
        <a data-toggle="dropdown" href="#">Dropdown trigger</a>
       
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
          <li class="dropdown-header">Dropdown header 2</li>
          <li><a tabindex="-1" href="#">Action</a></li>
          <li><a tabindex="-1" href="#">Another action</a></li>
          <li><a tabindex="-1" href="#">Something else here</a></li>
          <li><a tabindex="-1" href="#">Something else here</a></li>
          <li><a tabindex="-1" href="#">Something else here</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header</li>
          <li><a tabindex="-1" href="#">Separated link</a></li>
        </ul>
      </span>
    </span> 


</div>
<!-- /menu -->
</div><!--/panel-->


<h2>说明：</h2>
<script>
  laolin.wait.ready(function(){
   
    laolin.ui.showInfo('梁截面计算',600);
  });
</script>    
</div>