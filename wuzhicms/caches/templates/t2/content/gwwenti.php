<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><html allowtransparency="true">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lt IE 9]>
　　　　<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
　　<![endif]-->
<title>问题专区</title>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 794px)" href="kefu.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 794px) and (max-width: 1920px)" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>
<script>
    $(function() {
        $('.more_game').hover(function() {
           $("#game").fadeIn(300);
        },function(){
			$("#game").hide();
	  })
    })
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false">
<div class="web_top">
  <div class="web_logo">
   <img src="image/logo.png" >
   <b>武圣客服专区</b>
   <div class="logo_right">
    <a href="" target="_blank">注册</a>
    <span>|</span>
    <a href="" target="_blank">充值</a>
    <span>|</span>
    <span class="more_game">
      <p>光环游戏</p>
      <img src="image/point_down.png">
          <div id="game" style="display:none;">
           <div class="game_head">
            <b>客户端游戏</b>
           </div>
           <div class="game_cont">
           <ul>
           <li><a href="http://www.iwanws.com/main.html" target="_blank">武圣</a></li>
           <li><a href="http://dg.iwanws.com" target="_blank">帝国无双</a></li>
           </ul>
           </div>
          </div>
      </span>
   </div>
  </div>
</div>
<div class="web_meun">
 <div class="meun_mid">
  <a href="index.html" >首页</a>
  <a href="http://www.iwanws.com/main.html" target="_blank">武圣官网</a>
  <a href="http://acc.iwanws.com/index.php/User/" target="_blank">用户中心</a>
  <a href="" target="_blank">公告</a>
  <img src="image/biaoyu.png">
 </div>
</div>
<div id="main">
<div class="cont_top">
   <a href="index.html" class="top_on" style="background:url('image/top_li.png') no-repeat right center;">客服专区</a>
   <a href="bangzhu.html">武圣帮助</a>
  </div>
    <div class="all_meun">
   <a href="index.html" class="all_top">专区首页</a>
   <a href="accout.html" >账号安全</a>
   <a href="jianyi.html" >建议反馈</a>
   <a href="bug.html">BUG反馈</a>
   <a href="wenti.html" class="all_on">问题专区</a>
   <a href="jbxx.html">举报信息</a>
   <a href="kefu.html" style="border:none;" class="all_btm">在线客服</a>
  </div>
  <div class="wt_area"> 
	<div class="ac_head">
    	<div class="head_meun back">
          <a href="index.html" target="_self">客服大厅</a>
        </div>
        <div class="head_meun ">
          <a href="accout.html" target="_self">账号安全</a>
        </div>
         <div class="head_meun">
          <a href="jianyi.html" target="_self">建议反馈</a>
        </div>
         <div class="head_meun  ">
          <a href="bug.html" target="_self">BUG反馈</a>
        </div>
         <div class="head_meun head_on">
          <a href="wenti.html" target="_self">问题专区</a>
        </div>
         <div class="head_meun">
            <div class="head_meunb">
              <a href="#" target="_self">举报信息</a>
               <div class="head_li">
                <div class="btn_jb"><a href="jbxx.html" target="_self">举报不良信息</a></div>
                <div class="btn_wg"><a href="jbwg.html" target="_self">举报外挂</a></div>
              </div>
            </div>
        </div>
         <div class="head_meun">
          <a href="kefu.html" target="_self">在线客服</a>
        </div>
         <div class="head_right">
        </div>
    </div>
    <div class="wt_mid">
  <div class="more_cont">
  <div class="act_head">
            <img src="image/wenti.png" width="72" title="问题专区"/>
            <span>问题专区</span>
            <a href="index.html">返回首页</a>
            <p>关于游戏的建议，可以在这里提给我们。</p>
          </div>
          <div class="tishi">
          <div class="tishi_cont">
              <div class="deng">
              <img src="image/deng.jpg"/>
              </div>
              <div class="more_tx">
               <span>重要说明：</span><a>此通道仅记录游戏中所遇到的问题，其他问题请您选择正确的提交入口，请详细描述您所遇到的问题。</a>
              </div>
          </div>
          </div>
      
      <div class="cont_form">
      <form method="post">
         <div class="form_li">
          <div class="formli_left">
           <span>标题：</span>
          </div>
          <div class="form_input">
            <input type="text" name="bug_biaoti" class="biaoti" maxlength="20" autocomplete="off"/>
          </div>
      
         </div>
         <div class="form_li playername">
          <div class="formli_left">
           <span>角色名字：</span>
          </div>
          <div class="form_input">
           <input type="text" name="player" class="player" maxlength="20" autocomplete="off"/>
          </div>
      
         </div>
         <div class="form_li youxiqufu">
          <div class="formli_left">
           <span>游戏区服：</span>
          </div>
          <div class="form_input">
          <select id="qufu" name="qufu" class="select_qf">
                           <option selected="selected">请选择区服</option>
                           <option value="">开天辟地</option>
                           <option value="">纵横天下</option>
                           <option value="">热血沙场</option>
                           <option value="">剑荡八荒</option>
                           <option value="">五福临门</option>
                           <option value="">金玉满堂</option>
                           <option value="">春暖花开</option>
                           <option value="">风花雪月</option>
                           <option value="">春光灿烂</option>
                           <option value="">清风明月</option>
                           <option value="">义薄云天</option>
                           <option value="">问鼎江湖</option>
                           <option value="">傲气凌云</option>
                           <option value="">龙战于野</option>
                           <option value="">侠骨柔情</option>
                     	 </select>
          </div>
      
         </div>
         <div class="form_li">
          <div class="formli_left">
           <span>您的问题：</span>
          </div>
          <div class="form_input">
          <textarea name="bugms" class="yj_box" maxlength="250" minlength="5" ></textarea>
          </div>
      
         </div>
         <div class="form_li">
          <div class="formli_left">
           <span>上传文件：</span>
          </div>
          <div class="form_input">
         <input type="file" name="bug_sc" class="scwj"/>
          </div>
      
         </div>
         <input type="submit" class="tijiao_btn" value="提交问题"/>
      </form>
      
      
         
      
       <div class="form_right">
         <p>如果您有相关截图，请上传。如多张图片可打
包压缩以zip或rar的文件格式上传，[限制文
件大小：2M以内]</p>
       </div>
      </div>
    </div>
</div>
</div>
<div class="footer">
 
    <div class="num">
      <p>若遇到紧急问题，请拨打客服电话：0755-26652163</p>
    </div>
</div>
<div id="foot">
  <div class="foot_cont">
    <div class="fcont_top">
     <img src="image/flogo.png"/>
     <a href="" target="_blank"><img src="image/www.png"/></a>
     <div class="top_top">
         <a href="" target="_blank">用户协议</a>
         <span>|</span>
          <a href="" target="_blank">关于北极光</a>
         <span>|</span>
          <a href="" target="_blank">联系我们</a>
         <span>|</span>
          <a href="" target="_blank">商务合作</a>
         <span>|</span>
          <a href="" target="_blank">法律声明</a>
      </div>
      <div class="top_top">
          <span>网络文化经营许可证号：粤网文〔2015〕2246-495号</span>
         <span>|</span>
          <a href="" target="_blank"> 粤ICP备15071838号-2</a>
        
      </div>
    </div>
    <div class="fcont_mid">
         <span>健康游戏忠告：抵制不良游戏  </span>
         <span>拒绝盗版游戏</span>
         <span>注意自我保护</span>
         <span>谨防受骗上当</span>
         <span>适度游戏益脑</span>
         <span>沉迷游戏伤身 </span>
         <span>合理安排时间 </span>
         <span>享受健康生活</span>
    </div>
    <div class="fcont_fot">
       <p>Copyright © 2010-2016 iwanws. All rights reserved.深圳北极光网络科技有限公司</p>
       <span>本公司旗下所运营游戏均适合18周岁以上人群。</span>
    </div>
  </div>
</div>
</body>
</html>
