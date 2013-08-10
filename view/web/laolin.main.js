/**
 laolin.main.js  by 
 @author laolin 
 @version v1.0.0 
 Copyright 2013 laolin.
 http://laoin.com

<pre>
由于：用 (script src='xxx') 标签加载外部js文件为阻塞页面渲染。
目标：html里有0个用 (script src='xx')加载的外部js文件。
只有内嵌的js代码：(script)js codes(/script)
设计了本js文件作为内嵌的js代码：负责加载其他js和css，
实现把js/css文件的加载可以推到页面渲染之后。

主要函数：
一、事件：
  laolin.wait.begin(name,callback)
    在laolin.wait.list里登记一项name等待事件（事件结束时执行callback）
    
  laolin.wait.end(name)
    从laolin.wait.list里删除name项，事件结束，如有callback，执行之。
    
  laolin.wait.js(文件名或文件名数组,callback或callback数组)
  laolin.wait.css(文件名或文件名数组,callback或callback数组)
    每个文件名会用laolin.wait.begin登记一项等待事件，
    然后用laolin.wait.loader.loadJs/loadCss加载文件，
    返回的dom对象的onload会调用laolin.wait.end来结束前面登记的事件。
    
  laolin.wait.ready(callback)
    laolin.wait.list里是空时才执行，否则加到待执行列表中，
    laolin.wait.end结束最后一个等待事件时触发
二、辅助函数：
  laolin.wait.loader.loadJs(id,filepath)
    加载Js文件，返回加载该js的 script dom对象

  laolin.wait.loader.loadCss(id,filepath)
    加载Css文件，返回加载该css的 link dom对象
    
用法：
1，本js文件应该在服务器端直接用 嵌入在html页面里，推荐放在最前面。
2，先执行一句laolin.wait.begin('wait');随便登记一个等待事件
3，用wait.js，wait.css等，登记等待加载其他需要的js,css文件的事件
4，执行一句laolin.wait.end('wait');结束前面随便登记的同一个事件
5，原来用jQurey的：
  <code>
  $(function(){
    //js codes
  });
  </code>
  那些要等dom ready时执行的代码或其他依赖外部js的代码都放到laolin.wait.ready里：
  <code>
  laolin.wait.ready(function(){
    //js codes
  });
  </code>
  （由于jQuery也没有加载，所以$是未定义的，不能用。）
</pre>
*/
var laolin={};

(function(laolin){
  laolin.wait={};
  laolin.wait.loader={};
 
    laolin.wait.list={};
    laolin.wait.callback=[];
    //console.log('laolin.wait.loaded'); 
    
    
  /// 调用一个url（这个URL返回js）并执行之，用于跨域ajax
  /// 参考baidu自己各站点跨域ajax的方法的
  laolin.wait.loader.loadJs=function (id,url){
     oScript = document.getElementById(id);
     var head = document.getElementsByTagName("head").item(0);
     if (oScript) {
        head.removeChild(oScript);
     }
     oScript = document.createElement("script");
     oScript.setAttribute("src", url);
     oScript.setAttribute("id",id);
     oScript.setAttribute("type","text/javascript");
     oScript.setAttribute("language","javascript");
     head.appendChild(oScript);
     return oScript;
  }
  
  /// 动态加载一个css
  laolin.wait.loader.loadCss=function (id,url){
    var cssTag = document.getElementById(id);
    var head = document.getElementsByTagName('head').item(0);
    if(cssTag) { 
      head.removeChild(cssTag);
    }
    css = document.createElement('link');
    css.setAttribute('href' ,url);
    css.setAttribute('rel' , 'stylesheet');
    css.setAttribute('type' , 'text/css');
    css.id = id;
    head.appendChild(css);
    return css;
  }







  laolin.wait.begin=function(name,callback) {
    laolin.wait.list[name]=callback;
    //console.log('begin:'+name);
  }
  laolin.wait.end=function(name) {
    callback=laolin.wait.list[name];
    delete laolin.wait.list[name];
    //console.log('end:'+name);
    if(callback)callback();//本项完成
    
    //检查是不是所有项目都完成了：
    if(laolin.wait.isReady()) {
      console.log('laolin.wait.isReady');
      for( var i=0; i<laolin.wait.callback.length; i++) {
        laolin.wait.callback[i]();
      }
      laolin.wait.callback=[];
    }
  }
  
  /**
    laolin.wait.js和laolin.wait.css:
    的具体实现代码都在laolin.wait.files(filetype,filenames,callbacks)里。
    @param filetype :支持'css'或'js'
    @param filenames : 一个文件名或文件名数组
      加载指定的一个文件或一系列文件。
      每个文件名会用laolin.wait.begin登记一项等待事件，
      然后用laolin.wait.loader.loadJs/loadCss加载文件，
      返回的dom对象的onload会调用laolin.wait.end来结束前面登记的事件。
    @param callbacks : 可选，一个回调函数或字符串或这两种的数组
      以下4种情况：
      如果filenames是数组， callbacks 也是数组：
        分别调用laolin.wait.file(type,filenames[n],callbacks[n])
        callbacks 数组太长的部分被忽略，太短时则filenames后面几项就没有 callbacks 项。
      如果filenames是数组， callbacks 不是数组：
        分别调用laolin.wait.file(type,filenames[n],callbacks)
        即所有的filenames[n]项均对应同一个 callbacks 。
      如果filenames不是数组， callbacks 也不是数组：
        则调用一次laolin.wait.file(type,filenames,callbacks)就搞定了
      如果filenames不是数组，而 callbacks 是数组：会运行出错。
  */
  laolin.wait.js=function(filenames,callbacks) {
    laolin.wait.files('js',filenames,callbacks);
  }
  laolin.wait.css=function(filenames,callbacks) {
    laolin.wait.files('css',filenames,callbacks);
  }
  laolin.wait.files=function(filetype,filenames,callbacks) {
    if(Object.prototype.toString.call(filenames)==="[object Array]") {
      a_list = Object.prototype.toString.call(callbacks)==="[object Array]"?
          callbacks:undefined;
      for( var i=0; i<filenames.length; i++) {
        laolin.wait.file(filetype, filenames[i], a_list?a_list[i]:callbacks);
      };
    } else {
      laolin.wait.file(filetype,filenames,callbacks);
    }
  }
  
  /**
  laolin.wait.file (filetype,filename,callback)
  @param filetype :支持'css'或'js'
  @param filename :要加载的文件路径
  @param callback ：几种情况：
    1,函数：完成后调用之上述登记事件完成时的回调函数
    2,未定义或其他：忽略
  */
  laolin.wait.file=function(filetype,filename,callback) {
    if("function"==typeof(callback)){
      f=callback;
    } else {
      f=undefined;
    }
    laolin.wait.begin(filetype+':'+filename,f);
    loader=laolin.wait.loader.loadJs;//默认js
    if('css'==filetype) {
      loader=laolin.wait.loader.loadCss;//css
    }
    loader('',filename).onload=function(){
      laolin.wait.end(filetype+':'+filename);
    };
  }
  laolin.wait.isReady=function() {
    for(somethn in laolin.wait.list ){return false;}
    return true;
  }
  laolin.wait.ready=function(callback) {
    if(laolin.wait.isReady())callback();
    else laolin.wait.callback.push(callback);
  }
  window.$=laolin.wait.ready;//临时代替一下jQuery的$，jQuery加载会自动被覆盖回去
})(laolin);