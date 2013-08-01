<div class="col-lg-12">
<div class="row">

    <h3>这些是LaoLin的私有API，非通用API</h3>
    <h4>当然这些也不是什么秘密API。这些API主要是给LaoLin自己用的，所以没考虑什么通用性，一般说来对别人没什么用，如果碰巧有人用得上，纯属巧合，欢迎使用。</h4>
    <pre>
    第一个参数c(controller)：必须=api才能进到这个api模块里（也有可能未定义，通过默认值进来的）
    第二个参数a(action)：必须=预定义的一些成员函数名，否则根据config定义，执行成员函数:test()
    后续参数：其他需要自定义的参数随便接在后面，推荐第三个参数采用名字b，也可以随便用别的名字</pre>
    支持参数a列表：
    <ol>
      <li>
      a=test<br/>
        默认,用来测试api是否正常运作
      </li>
      <li>
      a=wp<br/>
        返回wordpress文章或页面<b>摘要</b>的API
        <ol>
          <li>
            b=bycat(?c=api&a=wp&b=bycat&cat=72,77&npost=2)每一指定cat类显示npost篇文章 
          </li>
          <li> 
            b=byid(?c=api&a=wp&b=byid&id=4001,4002) 指定id的文章 
          </li>
          <li> 
            b=pagebyid(?c=api&a=wp&b=pagebyid&id=3001,3002) 指定id的页面 
          </li>
          <li> 
            b=pagebyparent(?c=api&a=wp&b=pagebyparent&id=3333) 指定(一个)id的子页面 
          </li>
        </ol>

      </li>
    </ol>
    
<?php
//$title $info 
?>

</div>         
<script>

</script>    
</div>