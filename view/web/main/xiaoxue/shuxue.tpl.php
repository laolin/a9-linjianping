<div>&nbsp;</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
  <div class="panel panel-primary">
    <div class="panel-heading">已做题</div>
    <div class="panel-body">
      <b class='label label-info'>点击已做题目可以在右边修改答案</b>
      <span id='shuxue-done-score'></span>
    </div>
    
    <ul class="list-group"  id="shuxue-done-list">
    </ul>
  </div>
</div>       
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
  <div class='shuxue-box'>
    <fieldset id='shuxue-start'>
      <input type="number" min="1" max="5" name='sx_time' class="form-control" value='1'>分钟， 
      <input type="number" min="0" max="100" name='sx_count' class="form-control" value='0'>题（0表示不限题数）<br/>
      <input type="number" min="10" max="1000" name='sx_max' class="form-control" value="<?php echo $ks_n; ?>"> 以内加减法   
      <button type="button" class="btn btn-info" onclick='sx_start()'>开始测试</button>
    </fieldset>
    <div class="panel panel-info" id='shuxue-working'>
      <div class="panel-heading">正在做第<b id="shuxue-index">1</b>题 [总用时<b id="shuxue-time">0:00</b>]</div>
      <div class="working">
        <b id="sx_a">A</b><b id="sx_op">+</b><b id="sx_b">B</b>=
        <input id="sx_ans" name='sx_ans' class="form-control" type="number" min="0" max="1000"
        data-toggle="tooltip" data-placement='top' title='输入答案后可直接按回车答题'>
        <button type="button" class="btn btn-primary" onclick='sx_answer()'>确定</button>
      </div>
        <button type="button" class="btn btn-warning" onclick='sx_next()'>跳过</button>
        <button type="button" class="btn btn-info" onclick='sx_end()' id='shuxue-end'
        data-toggle="tooltip" data-placement='bottom' title='结束测试' data-content='批改一下看是否全对了'>批改</button>
    </div>
    <div id='shuxue-score' class=''>
      <div class="panel panel-info">
        <div class="panel-heading">批改结果</div>
        <div class="panel-body">
          <b id='shuxue-score-maxn'></b>以内的加减法
        </div>
        
        <ul class="list-group"  id="shuxue-done-list">
        <li class="list-group-item">做了<b id='shuxue-score-count'></b>题，用时<b id='shuxue-score-time'></b></li>
        <li class="list-group-item">正确<b id='shuxue-score-ok'></b>题， 错误<b id='shuxue-score-err'></b>题</li>
        <li class="list-group-item">正确率<b id='shuxue-score-rat'></b>%</li>
        </ul>
      </div>
    </div>
</div>         
<script>
laolin.wait.ready(function(){
  
  $("#shuxue-working").hide();
  $("#shuxue-score").hide();
  $("#sx_max").focus().keypress(function(e){
      if(e.which == 13)sx_start();
    });
  $("#sx_ans").keypress(function(e){
      if(e.which == 13)sx_answer();
    });
  laolin.app.xiaoxue={};
  laolin.app.xiaoxue.shuxue={};
  window.App=laolin.app.xiaoxue.shuxue;
  window.Fn=laolin.app.fn;
    
  $('#shuxue-done-list').on('click','li',function(){
    App.workCurrentIndex=$(this).attr('done-n');
    App.workCurrent=App.workDone[App.workCurrentIndex];
    sx_disp_work_current();
  });

    
});

//----------------------------

function sx_start(){
  $("#shuxue-start").attr('disabled','disabled');
  $("#shuxue-working").show();
  $("#shuxue-score").hide();
  $('#shuxue-done-list').html('');
  
  App.maxN=Fn.getInputValue('sx_max',10,1000,20);//最大数字
  App.maxTime=Fn.getInputValue('sx_time',1,5,2)*60;//完成测试计时的时间（秒）
  App.maxCount=Fn.getInputValue('sx_count',0,100,0);//大于0表示完成测试的题数，=0表示不限
  if(App.maxCount<=0)App.maxCount=999;//小学生做1K题够多啦
  App.timeStart=Date.now();
  App.timer=setInterval(sx_timer,333);
  App.workDone=[];//已完成题目
  App.workCurrentIndex=-1;//当前题目序号
  sx_answer();
}

function sx_answer(){
  ans=$("#sx_ans").attr('value');
  if(App.workCurrentIndex>=0){
    if(isNaN(parseInt(ans)))
      return $("#sx_ans").stop().fadeOut(100).fadeIn(200).fadeOut(100).fadeIn(200).focus();
    else
      App.workCurrent.z=parseInt(ans);
    App.workDone[App.workCurrentIndex]=App.workCurrent;
    sx_disp_done_list(App.workCurrentIndex);
  }
  sx_next();
}

function sx_next(){
  $("#sx_ans").focus();
  if(App.workCurrentIndex>=0){
   
    i=+App.workCurrentIndex+1;//记住当前题之后一题的位置
    if(App.workDone.length>=App.maxCount) {//题数全完成
      $("#shuxue-end").popover({trigger:'manual',delay: { show: 500, hide: 100 }});
    } else {
      App.workCurrentIndex=App.workDone.length;//打算新建一题
    }
    //找一下:当前题之后一题开始找，若还有未回答的题，则不新建：
    for(;i<App.workDone.length;i++){
      if(App.workDone[i]['z']=='?'){
        App.workCurrentIndex=i;
        break;
      }
    }
  } else {
    App.workCurrentIndex=0;
  }
  
  if(App.workCurrentIndex>=App.workDone.length){ 
    App.workCurrent=sx_gen_work();
  } else {
    App.workCurrent=App.workDone[App.workCurrentIndex];
  }
  App.workDone[App.workCurrentIndex]=App.workCurrent;
  sx_disp_done_list(App.workCurrentIndex);
  sx_disp_work_current();
}


function sx_end(){
  if(App.timer>0)clearInterval(App.timer);
  $("#shuxue-start").removeAttr('disabled');
  //$("#shuxue-working").hide();
  dok=0;
  derr=0;
  
  $("#shuxue-done-list li").removeClass('active');
  $(".label-sx-ok-err").remove();
  for(i=0;i<App.workDone.length;i++){
    p=App.workDone[i];
    if(eval(""+p.a+p.op+p.b)==p.z){
      dok++;
      $("#shuxue-done-list li[done-n="+i+"]").append($('<span class="label-sx-ok-err label label-success">正确</span>'));
    } else {
      derr++;
      $("#shuxue-done-list li[done-n="+i+"]").append($('<span class="label-sx-ok-err label label-danger">错误</span>'));
    }
    drat=Math.round(dok*100/App.workDone.length);
  }
  if(App.timer>0){//不>0，说明已经批改过，不要更新批改数据
    $("#shuxue-score-maxn").html(App.maxN);
    $("#shuxue-score-count").html(App.workDone.length);
    $("#shuxue-score-time").html(sx_get_time_used());
    $("#shuxue-score-ok").html(dok);
    $("#shuxue-score-err").html(derr);
    $("#shuxue-score-rat").html(drat);
  }
  $("#shuxue-score").show();
  $("#shuxue-done-score").append($('<span class="label-sx-ok-err label label-success">正确率'+drat+'%</span>'));
  App.timer=0;
}
//==========================

//返回 0:00格式的 分:秒 时间
function sx_get_time_used(){
  sec=Math.round((App.timeEnd-App.timeStart)/1000);
  m=Math.floor(sec/60);
  s=sec%60;
  if(s<10)s='0'+s;
  return ""+m+":"+s;
}
function sx_timer(){
  App.timeEnd=Date.now();
  $("#shuxue-time").html(sx_get_time_used());
  if(sec>=App.maxTime)
    sx_end();
}
function sx_disp_work_current(){
  n=+App.workCurrentIndex+1;
  z=App.workCurrent.z=='?'?"":App.workCurrent.z;
  $("#shuxue-index").html(n);
  $("#sx_a").html(App.workCurrent.a);
  $("#sx_op").html(App.workCurrent.op);
  $("#sx_b").html(App.workCurrent.b);
  $("#sx_ans").attr('value',z);
  $("#shuxue-done-list li").removeClass('active');
  $("#shuxue-done-list li[done-n="+App.workCurrentIndex+"]").addClass('active');
  //change addClass('disabled');
}
function sx_disp_done_list(n){
  el=$("#shuxue-done-list");
  e=$('[done-n='+n+']',el);
  d=App.workDone[n];
  if(e.length==0){
    e=$('<li class="list-group-item" done-n="'+n+'"></li>');
    el.append(e);
  }
  n++;
  e.html('第'+n+'题:'+d.a+d.op+d.b+'='+d.z);
}
function sx_gen_work(){
  r=(Math.random()+0.9)/1.9; //r=0.5~1
  r2=(Math.random()+0.15)/1.3; //0.1~0.9
  n=Math.round(r*App.maxN);
  
  b=Math.round(r2*r*App.maxN);
  op=Math.random()>0.5?'+':'-';
  if(op=='-')a=n;else a=n-b;
  return {a:a,op:op,b:b,z:'?'};
}
</script>    
