<div class="col-12 col-sm-10 col-lg-10">
<?php
      //echo $main_content ;
?>
<h2>CSS</h2>

<!--Forms 4 -->  
<div class="panel panel-info">
  <div class="panel-heading"> form 4 </div>
    
close 按钮：<code>class="close"</code>
<pre>abc 2
    <span type="button" class="close">&times;</span>
</pre>
<div>abc
    <button type="button" class="close">&times;</button>
</div>
<div>abc 3
    <a type="button" class="close">&times;</a>
    dfafda
    fd adf 
    aaf
</div>
<div>abc 4
    <b type="button" class="close">&times;</b>
    DFFFFFFFFFFFFFFFFFFFFFFF
</div>
<div>abc 4
    <b type="button" class="close">&times;</b>
    DFFFFFFFFFFFFFFFFFFFFFFF
</div>
<div>abc 0
    <a type="button" class="close">&times;</a>
    DFFFFFFFFFFFFFFFFFFFFFFF
</div>
<pre>abc 111
    <span type="button" class="close">&times;</span>
</pre>

    
指定<code>btn-block</code>
<button type="button" class="btn btn-primary btn-large btn-block">Block level button</button>
<button type="button" class="btn btn-default btn-large btn-block">Block level button</button>
 
<button type="button" class="btn btn-info btn-small btn-block">Block level button</button>
<button type="button" class="btn btn-danger btn-large btn-block">Block level button</button>
 
<button type="button" class="btn btn-success btn-large btn-block">Block level button</button>
<button type="button" class="btn btn-warning btn-small btn-block">Block level button</button>

<ul>
<li> 指定<code>has-warning ，has-error ，has-success</code>
</ul>

<b class="has-success">
  <div class='row'>
    <div class="form-group">
      <label class="control-label" for="inputWarning">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning">
      <a class='help-block'>.help-block</a>
    </div>

    <div class="form-group">
      <label class="control-label" for="inputWarning">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning">
      <a class='help-block'>.help-block</a>
    </div>
  </div>
  <div class='row'>
    <div class="form-group">
      <label class="control-label" for="inputWarning">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning">
      <a class='help-block'>.help-block</a>
    </div>

    <div class="form-group">
      <label class="control-label" for="inputWarning">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning">
      <a class='help-block'>.help-block</a>
    </div>
  </div>
</b>

<div class="form-group has-warning">
  <label class="control-label" for="inputWarning">Input with warning</label>
  <input type="text" class="form-control" id="inputWarning">
</div>
<div class="form-group has-error">
  <label class="control-label" for="inputError">Input with error</label>
  <input type="text" class="form-control" id="inputError">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Input with success</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>


<ul>
<li> <code>select</code>，多选的：<code>multiple</code>
</ul>
<select class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>

<select multiple class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>



</div>


<!--Forms 3 -->  
<div class="panel panel-info">
  <div class="panel-heading"> form 3</div>
    
   <label>
    <input type="checkbox" value="">
    Option one is this and that&mdash;be sure to include why it's great
  </label>
  <br/>
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Option one is this and that&mdash;be sure to include why it's great
  </label>
  <br/>
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    Option two can be something else and selecting it will deselect option one
  </label>
  
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
</label>

  
  <label class="c heckbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
</label>
<label class="c heckbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
</label>
<label class="c heckbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
</label>
  
  
<ul>
<li> <code>textarea</code>，高度用<code>rows</code>指定
</ul>

<textarea class="form-control" rows="8">工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d

工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d

工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d
工，了，以a,c,b,c,d

工，了，以a,c,b,c,d
</textarea>

<ul>
<li>input支持<code>text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.
</code>
</ul>
<pre>
no type
<input class='form-control'>
text
<input class='form-control' type='text'>
password
<input class='form-control' type='password'>
datetime
<input class='form-control' type='datetime'>
datetime-local
<input class='form-control' type='datetime-local'>
date
<input class='form-control' type='date'>
month
<input class='form-control' type='month'>
time
<input class='form-control' type='time'>
week
<input class='form-control' type='week'>
number
<input class='form-control' type='number'>
email
<input class='form-control' type='email'>
url
<input class='form-control' type='url'>
search
<input class='form-control' type='search'>
tel
<input class='form-control' type='tel'>
color
<input class='form-control' type='color'>
</pre>
</div>

<!--Forms 2 -->  
<div class="panel panel-info">
  <div class="panel-heading"> form 2 </div>
  
<ul>
<li>form指定<code>.form-inline</code>：各input行内排列<code>（需要对input指定宽度，默认都是100%，所以行内排列也是一个占一行）</code>
</ul>
<style>
.the-example.form-inline select,
.the-example.form-inline input[type="text"],
.the-example.form-inline input[type="password"] {
  width: 180px;
}
</style>
<form class="the-example form-inline">
  <input type="text" class="form-control" placeholder="Email">
  <input type="password" class="form-control" placeholder="Password">
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>


<ul>
<li>form指定<code>.form-horizontal</code>：用col-*系列指定宽度，<code>.form-groups</code> to behave as grid rows, so no need for .row.
</ul>

    <form class=" form-horizontal">
      <div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label">Email</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-3 control-label">Password</label>
        <div class="col-lg-9">
          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-offset-2 col-lg-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-offset-2 col-lg-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>

    

</div>



<!--Forms 1 -->  
<div class="panel panel-info">
  <div class="panel-heading"> form 1 </div>
  
<ul>
<li>用 div.<code>form-group</code>包起来,3项：
<li>label.<code>control-label</code> + input.<code>form-control</code> + p.<code>help-block</code> 
<li><code>fieldset</code> 和 <code>Legend</code>要不要可以看着办。
</ul>

  
  
<form>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="exampleInputEmail">Email address</label>
      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </fieldset>
</form>


</div><!--/panel-->


<!--  -->  
<div class="panel panel-info">
  <div class="panel-heading"> </div>
  

</div><!--/panel-->


<!-- col order(push,pull)    -->  
<div class="panel panel-danger">
  <div class="panel-heading">col order(push,pull) </div>
  <h1>这个为什么和例子的不一样？</h1>
  <h1 class='alert alert-success'>更新新版的css文件后问题解决，一样了！</h1>
<div class="row">
  <div class="col-lg-9 col-lg-push-3">9</div>
  <div class="col-lg-3 col-lg-pull-9">3</div>
</div>

<div class='row'>
  <div class='col-lg-5 col-lg-push-7'>1,w=555555</div>
  <div class='col-lg-7 col-lg-pu11-5'>2,w=7 5</div>
</div>
<h3>col order：列重排序（显示的顺序和html出现的顺序 不一样)</h3>
<ul>
<li><code></code>
<li>class <code>col-lg-push-*</code>可以往后推
<li>class <code>col-lg-pull-*</code>可以往前拉推
</ul>

<div class='alert alert-success'>以下2例每列宽度2：</div>
1.这是第1列 push-1的效果：
<div class="row">
  <div class="col-lg-2 col-lg-push-1"><button type="button" class="btn btn-block">1</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">2</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">3</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">4</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">5</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">6</button></div>
</div>

2.这是第3列 pull-1的效果
<div class="row">
  <div class="col-lg-2"><button type="button" class="btn btn-block">1</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">2</button></div>
  <div class="col-lg-2 col-lg-pull-1"><button type="button" class="btn btn-block">3</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">4</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">5</button></div>
  <div class="col-lg-2"><button type="button" class="btn btn-block">6</button></div>
</div>

</div>




<!--  -->  
<div class="panel panel-info">
  <div class="panel-heading"> </div>
  <h3>pre,code, .pre-scrollable只对pre有效。code+pre嵌套没用</h3>
  <code   class='pre-scrollable'> 
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  &lta class='abc'&gt
  &lta class='abc'&gt <br/>
  .abc 1+2=3*4=5*6-7*8(3)<br/>
  &lta class='abc'&gt <br/>
  afafdaf adf af <br/>
  </code>
  <pre>.abc 1+2=3*4=5*6-7*8(3)
  &lta class='abc'&gt
  </pre>
  <pre  class='pre-scrollable'><code>
  .abc 1+2=3*4=5*6-7*8(3)
  &lta class='abc'&gt
  &lta class='abc'&gt
  .abc 1+2=3*4=5*6-7*8(3)
  &lta class='abc'&gt
  afafdaf adf af 
  &lta class='abc'&gt
  afafdaf adf af 
  &lta class='abc'&gt
  &lta class='abc'&gt
  .abc 1+2=3*4=5*6-7*8(3)
  &lta class='abc'&gt
  afafdaf adf af 
  &lta class='abc'&gt
  .abc 1+2=3*4=5*6-7*8(3)
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  &lta class='abc'&gt
  </code></pre>
</div>


<script>
  laolin.wait.ready(function(){
   
    laolin.ui.showInfo('CSS',600);
  });
</script>    
</div>