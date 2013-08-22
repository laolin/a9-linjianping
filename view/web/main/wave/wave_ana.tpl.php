<?php
      //echo $main_content ;
?> 
<div class="col-lg-12">
<div id='pages'>
  <article id='page-wave_ana'>
  
<div id='plot-area'>
  <?php include_once( dirname(__FILE__)  . DS . 'plot-area.inc.html');?> 
</div>
<div class="panel">
  <div id='page-index'></div>


  <div id="btn-wave-op" class='hidden'>
  
    <div class="input-group">
      
      <span class="input-group-addon">已选地震波：<span class='label label-success' id='lable-wave-current'></span>：aMax</span>
      <input type="text" name="amax" value="" class="form-control">
      <span class="input-group-addon">nStep:</span>
      <input type="text" name="nstep" class="form-control">
      <span class="input-group-addon">StepStart:</span>
      <input type="text" name="stepstart" value="0" class="form-control">
    </div>
    <p></p>
  
    <div class="input-group spec-run">
      <span class="input-group-addon ">阻尼比:</span>
      <input type="text" name="zitaspec" value="0.05" class="form-control  spec-run">
      <span class="input-group-addon ">反应谱最长周期:</span>
      <input type="text" name="tmaxspec" value="5.999" class="form-control  spec-run">
      <span class="input-group-addon ">周期间隔:</span>
      <input type="text" name="dtspec" value="0.01" class="form-control  spec-run">
       <div class="input-group-btn">
          <button class="btn btn-primary" onclick="spectrumAnalyse()"> 反应谱分析 </button>
      </div>
    </div>
    <div class=" spec-plot">
      <span class='label label-success' >已完成反应谱分析，阻尼比：<span id="para-spen-zita"></span></span>
      <button class="btn btn-info" onclick="plotSpecU()">  伪位移反应谱:u </button>
      <button class="btn btn-info" onclick="plotSpecV()">  伪速度反应谱:v </button>
      <button class="btn btn-info" onclick="plotSpecA()">  伪加速度反应谱:a </button>
      <button class="btn btn-info" onclick="plotSpecA2()">  绝对加速度反应谱:a </button>
      <button class="btn btn-danger" onclick="delSpec()">  删除反应谱分析结果 </button>
    </div>
    <p></p>
    <div class="input-group respon-run">
      <span class="input-group-addon">阻尼比:</span>
      <input type="text" name="zita" value="0.05" class="form-control">
      <span class="input-group-addon">固有周期：</span>
      <input type="text" name="tn" value="2" class="form-control">
       <div class="input-group-btn">
          <button class="btn btn-primary " onclick="responAnalyse()"> 指定周期的时程反应分析 </button>
      </div>
    </div>
    <div class="  respon-plot">
      <span class='label label-success' id='para-respon'></span>
      <button class="btn btn-info  " onclick="plotResponU()"> 相对位移反应时程 </button>
      <button class="btn btn-info  " onclick="plotResponV()"> 相对速度反应时程 </button>
      <button class="btn btn-info  " onclick="plotResponA()"> 相对加速度反应时程 </button>
      <button class="btn btn-info  " onclick="plotResponA2()"> 绝对加速度反应时程 </button>
      <button class="btn btn-danger" onclick="delRespon()">  删除时程分析结果 </button>
    </div>
    <p></p>
  </div>

  <div class="" id='btn-wave-group'>
    <button class="btn btn-primary " onclick="listAllWave()"> 加载已有地震波列表 </button>
  </div>
  <button class="btn btn-info " onclick="uploadWave()"> 上传地震波 </button>
</div><!--panel-->
<script>


waveNames=[]
waveData={};
waveData.current=-1;
notyId=0; 



if('127.0.0.1'==document.location.host)
  apiScript='./';
else
  apiScript='http://api.laolin.com/';

apiWave=apiScript+'?c=api&a=wave&js=getWave&b=';
apiWaveList=apiScript+'?c=api&a=wave&b=_list&js=getWaveList';

    
laolin.wait.ready(function(){

  laolin.ui.currentPage='wave_ana';
  $('.spec-plot').hide();
  $('.respon-plot').hide();
  laolin.wait.css('<?php echo $staticpath; ?>/css/jquery.jqplot.min.css');
  laolin.wait.js([
    '<?php echo $staticpath; ?>/js/jquery.jqplot.min.js',
    '<?php echo $staticpath; ?>/js/jqplot.canvasTextRenderer.min.js',
    '<?php echo $staticpath; ?>/js/jqplot.canvasAxisLabelRenderer.min.js'],function(){
        listAllWave(); 
    }
  );
}); //end laolin.wait.ready



function uploadWave(){
  alert('暂不提供此功能。');
}

//列出所有的波
function listAllWave(){
  laolin.wait.js(apiWaveList ,function(){
    $("#btn-wave-group").html(''); 
    for( var i=0; i<waveNames.length; i++) {
      $("#btn-wave-group").append('<a class="btn btn-default btn-wave" wave-n="'+i+'">加载波:'+waveNames[i]+'</a><a>&nbsp</a>');
    }
    /*do{//根据#loadwave+xxx自动加载波
      laolin.ui.hashFunctions={};
      para=location.hash.substr(1).split('+');
      for(var i=0;i<para.length-1;i+=2){
        laolin.ui.hashFunctions[para[i]]=para[i+1];
      }
      if(laolin.ui.hashFunctions.loadwave){
        for(var j=0;j<waveNames.length;j++){
          if(laolin.ui.hashFunctions.loadwave==waveNames[j]){
            loadWave(j);
            break;
          }
        }
        //delete laolin.ui.hashFunctions.loadwave;
      }
    }while(0);*/
    $('.btn-wave').click(function(event){
      $('.btn-wave').removeClass('btn-large');
      wn=+$(this).addClass('btn-large').attr('wave-n');
      waveData.current=wn;
      if(!waveData[waveNames[wn]]) {
        loadWave(wn)
      } else {
        showWave(wn);
      }
      //location.hash='#loadwave+'+waveNames[wn];
      return false;
    }); // end $('.btn-wave').click
  });
}

function loadWave(wn){
  waveData.current=wn;
  $('.btn-wave[wave-n='+wn+']').html('加载中:'+waveNames[wn]);
  $('.btn-wave').addClass('disabled');
  waveData.toGetData=waveNames[wn];
  laolin.wait.js(apiWave+waveNames[wn],function(){
    $('.btn-wave[wave-n='+wn+']').removeClass('btn-warning').addClass('btn-success btn-large')
      .html('选择波:'+waveNames[wn]);
    waveData.toGetData='';
    showWave(wn);
    $('.btn-wave').removeClass('disabled');
  });
}
function showWave(wn){
  data=waveData[waveNames[wn]];
  waveData[waveNames[wn]]['max']=maxData=Array.absMax(data.data);
  $('input[name=nstep]').attr('value',waveData[waveNames[wn]]['count']);
  $('input[name=amax]').attr('value',maxData);
  
  $("#lable-wave-current").html(waveNames[wn]+' [dt='+data.dt+']');
  $("#btn-wave-op").removeClass('hidden');
  plotWave();
  done=data.res?true:false;
  if(done){
    $('.respon-run').hide();
    $('.respon-plot').show();
    $('#para-respon-tn').html(data.res.tn);
    $('#para-respon-zita').html(data.res.zita);
    $('#para-respon-amax').html(data.res.amax);
  } else {
    $('.respon-run').show();
    $('.respon-plot').hide();
  }
  done=data.spec?true:false;
  if(done){
    $('.spec-run').hide();
    $('.spec-plot').show();
    $('#para-spen-zita').html(data.spec.zita);
  } else {
    $('.spec-run').show();
    $('.spec-plot').hide();
  }
}



function plotWave(){
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['data'])
    plot_data(waveData[waveNames[waveData.current]]['data'],
      '地震波:'+waveNames[waveData.current]+', max='+waveData[waveNames[waveData.current]]['max']);
  else
    laolin.ui.showInfo('Please load wave data first.',1000,'error');
  
}
function plotResponU(){
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['res'])
    plot_data(waveData[waveNames[waveData.current]]['res']['u'],
      '位移时程:'+waveNames[waveData.current]+', max='+waveData[waveNames[waveData.current]]['res']['uMax']);
  else
    laolin.ui.showInfo('Please analyse first.',1000,'error');
}
function plotResponV(){
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['res'])
    plot_data(waveData[waveNames[waveData.current]]['res']['v'],
      '速度时程:'+waveNames[waveData.current]+', max='+waveData[waveNames[waveData.current]]['res']['vMax']);
  else
    laolin.ui.showInfo('Please analyse first.',1000,'error');
}
function plotResponA(){
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['res'])
    plot_data(waveData[waveNames[waveData.current]]['res']['a'],
      '加速度时程:'+waveNames[waveData.current]+', max='+waveData[waveNames[waveData.current]]['res']['aMax']);
  else
    laolin.ui.showInfo('Please analyse first.',1000,'error');
}
function plotResponA2(){
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['res'])
    plot_data(waveData[waveNames[waveData.current]]['res']['a2'],
      '加速度时程:'+waveNames[waveData.current]+', max='+waveData[waveNames[waveData.current]]['res']['aMax']);
  else
    laolin.ui.showInfo('Please analyse first.',1000,'error');
}



function plotSpecU() {
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['spec'])
    plot_data(waveData[waveNames[waveData.current]]['spec']['u'],
      '位移反应谱:'+waveNames[waveData.current]);
  else
    laolin.ui.showInfo('Please analyse spectrum first.',1000,'error');
}
function plotSpecV() {
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['spec'])
    plot_data(waveData[waveNames[waveData.current]]['spec']['v'],
      '速度反应谱:'+waveNames[waveData.current]);
  else
    laolin.ui.showInfo('Please analyse spectrum first.',1000,'error');
}
function plotSpecA() {
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['spec'])
    plot_data(waveData[waveNames[waveData.current]]['spec']['a'],
      '加速度反应谱:'+waveNames[waveData.current]);
  else
    laolin.ui.showInfo('Please analyse spectrum first.',1000,'error');
}
function plotSpecA2() {
  if(waveData.current>=0&&waveData[waveNames[waveData.current]]&&waveData[waveNames[waveData.current]]['spec'])
    plot_data(waveData[waveNames[waveData.current]]['spec']['a2'],
      '绝对加速度反应谱:'+waveNames[waveData.current]);
  else
    laolin.ui.showInfo('Please analyse spectrum first.',1000,'error');
}
function delRespon(){
  delete waveData[waveNames[waveData.current]]['res'];
  $('.respon-run').show();
  $('.respon-plot').hide();
  return false;
}
function delSpec(){
  delete waveData[waveNames[waveData.current]]['spec'];
  $('.spec-run').show();
  $('.spec-plot').hide();
  return false;
}
function spectrumAnalyse(){
  notyId=laolin.ui.showInfo('spectrum analysing ...',300);
  
  ww=waveData[waveNames[waveData.current]]['data'];
  dt=waveData[waveNames[waveData.current]]['dt'];
  nstep_wave=ww.length;
  
  amax=get_input('amax',0.001,10000,510);
  //tn=get_input('tn',0.001,10,2);
  zita=get_input('zitaspec',0,0.8,0.05);
  maxtn=get_input('tmaxspec',0.5,100,5.999);
  dtn=get_input('dtspec',0.005,1,0.00);
  
  nstep=get_input('nstep',1,90000,nstep_wave);//负数全部步数
  stepstart=get_input('stepstart',0,90000,0);
  

  

  maxi=maxtn/dtn;
  spec={dtn:dtn,zita:zita,u:[],v:[],a:[],a2:[]};
  
  console.log('Start:amax,dt,zita,nstep,stepstart= '+amax+', '+dt+', '+zita+', '+nstep+', '+stepstart);
  for(kk=1;  kk< maxi;  kk++) {
    tn=kk*dtn;
    if(tn<2*dt)continue;
    //console.log('tn='+tn);
    rs=newmark(ww,amax,dt,tn,zita,nstep,stepstart);
    spec.u[kk]=Array.absMax(rs.u);
    spec.v[kk]=Array.absMax(rs.v);
    spec.a[kk]=Array.absMax(rs.a);
    spec.a2[kk]=Array.absMax(rs.a2);
  }
  ww=waveData[waveNames[waveData.current]]['spec']=spec;
  notyId=laolin.ui.showInfo('spectrum analyse done',600);
  plotSpecA();
  $('.spec-run').hide();
  $('.spec-plot').show();
  $('#para-spen-zita').html(zita);
  return false;
}

function responAnalyse(){
  notyId=laolin.ui.showInfo('Analysing ...',500);
  
  ww=waveData[waveNames[waveData.current]]['data'];
  dt=waveData[waveNames[waveData.current]]['dt'];
  nstep_wave=ww.length;
  
  amax=get_input('amax',0.001,10000,510);
  tn=get_input('tn',0.001,10,2);
  zita=get_input('zita',0,0.8,0.05);
  nstep=get_input('nstep',1,90000,nstep_wave);//负数全部步数
  stepstart=get_input('stepstart',0,90000,0);
  

  
  rs=waveData[waveNames[waveData.current]]['res']=newmark(ww,amax,dt,tn,zita,nstep,stepstart);
  rs.uMax=Array.absMax(rs.u);
  rs.vMax=Array.absMax(rs.v);
  rs.aMax=Array.absMax(rs.a);
  rs.amax=amax;
  rs.tn=tn;
  rs.zita=zita;
  $.noty.closeAll();
  notyId=laolin.ui.showInfo('Analysing done',1000);
  plotResponA();
  $('.respon-run').hide();
  $('.respon-plot').show();
  $('#para-respon').html('Tn=<span id="para-respon-tn">'+tn+'</span>,阻尼比=<span id="para-respon-zita">'+zita+'</span>,最大加速度:<span id="para-respon-amax">'+amax+'</span>')
  return false;
}

/***
 Newmark法分析线性体系的时程反应
 见Chopra《结构动力学》第5.4节
 amax 地面最大加速度（按此自动缩放地震波）
 Tn 固有周期
 zita阻尼比

*/
function newmark(wave,amax,dt,Tn,zita,stepCount,stepStart){
  if(tn<2*dt)
    return {error:'Need: Tn >= 2*dt.'};
  count=wave.length;//总步数
  if(count<2)
    return {error:'wave data error.'};
  omax=Array.absMax(wave);//原来的最大值
  if(omax<0.000001)
    return {error:'wave data is all zero.'};
  fac=Math.abs(amax/omax);
  if(fac<0.9999||fac>1.0001)for( i=0 ; i<count ; i++) {
    wave[i]*=fac;
  }
  if('undefined'==typeof(stepCount)||stepCount<0)stepCount=count;
  if('undefined'==typeof(stepStart)||stepStart<0)stepStart=0;//从0步开始
  
  omega_n=2*3.14159265/Tn;  //公式 Eq.(2.1.5)
  
  gama=0.5;beta=0.25;  //平均加速度法
  //gama=0.5;beta=0.1666667;  //线性加速度法

  m=0.01;//随便，不影响结果！
  c=zita*2*m*omega_n;//阻尼系数c Eq.(2.2.2)
  k=m*omega_n*omega_n;//刚度公式 Eq.(2.1.4)
  U=[];
  V=[];// u的一阶导:v
  A=[];// u的二阶导:a
  A2=[];

  p0=0;
  U[0]=0;
  V[0]=0;
  //A[0]=0;
  A2[0]=0;

  //step 1.0 初始计算
  A[0]=(p0-c*V[0]-k*U[0])/m;
  
  K=k+(gama*c/beta/dt)+(m/beta/dt/dt);
  a=m/beta/dt+gama*c/beta;
  b=m/2/beta+dt*(gama/2/beta-1)*c;
  /*
  console.log('dt '+dt);
  console.log('Tn '+Tn);
  console.log('c '+c);
  console.log('count '+count);
  console.log('stepCount '+stepCount);
  console.log('stepStart '+stepStart);
  console.log('a '+a);
  console.log('b '+b);
  console.log('k '+k);
  console.log('K '+K);  //*/

  //console.log(wave);
  //step 2.0对每个时间步i进行计算
  for( i=0 ; /*i<count-1 && */i<stepCount-1; i++) { 
    //console.log(' ====  step : '+i);
    if(i+stepStart<count-1)
      dpi= -m*(wave[i+1+stepStart]-wave[i+stepStart]);  //Eq.(5.4.8)
    else
      dpi=0;//允许地震结束后再继续算后续的自由振动
    dPi=dpi+a*V[i]+b*A[i];  //step 2.1
    dui=dPi/K;  //step 2.2
    dVi=gama*dui/beta/dt-gama*V[i]/beta+dt*(1-gama/2/beta)*A[i];  //step 2.3
    dAi=dui/beta/dt/dt-V[i]/beta/dt-A[i]/2/beta;  //step 2.4
    
    /*
    console.log(',wv '+wave[i+stepStart]);
    console.log('dpi '+dpi);
    console.log('dPi '+dPi);
    console.log('dui '+dui);
    console.log('dVi '+dVi);
    console.log('dAi '+dAi); //*/
    U[i+1]=U[i]+dui;
    V[i+1]=V[i]+dVi;
    A[i+1]=A[i]+dAi;
    A2[i+1]=A[i+1]+wave[i+1+stepStart];
  }
  //console.log('wave');console.log(wave);
  //console.log('u');console.log(U);
  //console.log('v');console.log(V);
  //console.log('a');console.log(A);
  return {u:U,v:V,a:A,a2:A2};
}




//WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW

Array.max = function( array ){
  return Math.max.apply( Math, array );
}
Array.absMax = function( ar ){
  mx=ar[0];
  for( var i=1; i<ar.length; i++) {
    if(Math.abs(ar[i])>mx)
      mx=Math.abs(ar[i]);
  }
  return mx;
};
//给jsonp回调函数用的
function getWave(a){
  return waveData[waveData.toGetData]=a;
}
//给jsonp回调函数用的
function getWaveList(a){
  return waveNames=a;
}
function get_input(name,min,max,def){
  vvv=+$('input[name='+name+']').attr('value');
  if(vvv<min||vvv>max){
    vvv=def;
  }
  $('input[name='+name+']').attr('value',vvv);
  return vvv;
}
</script>

  </article>
</div><!--pages-->

<p><small>
  如有任何意见或建议，请<a href='http://laolin.com/lin/?p=4763' tarbet='_blank'>到这里留言</a>，谢谢。
  </small>
</p>
</div>