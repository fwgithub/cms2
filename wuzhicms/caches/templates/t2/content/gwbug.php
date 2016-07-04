<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","gwhead",TPLID); ?>
<script type="text/javascript">
    function check(form) {

        if(form.biaoti.value=='') {
            alert("请输入标题!");
            form.biaoti.focus();
            return false;
        }
        if(form.yijian.value==''){
            alert("请输入意见!");
            form.yijian.focus();
            return false;
        }
        if(form.yi_sc.value==''){
            alert("请上传文件!");
            form.yi_sc.focus();
            return false;
        }
        return true;
    }
</script>

  <div class="bug_fk"> 
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
         <div class="head_meun head_on">
          <a href="bug.html" target="_self">BUG反馈</a>
        </div>
         <div class="head_meun ">
          <a href="wenti.html" target="_self">问题专区</a>
        </div>
         <div class="head_meun">
             <div class="head_meunb ">
              <a href="" target="_self">举报信息</a>
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
    <div class="bug_mid">
  <div class="more_cont">
  <div class="act_head">
            <img src="image/bug.png" width="72" title="BUG反馈"/>
            <span>BUG反馈</span>
            <a href="index.html">返回首页</a>
            <p>关于游戏的建议，可以在这里提给我们。</p>
          </div>
      <div class="tishi">
          <div class="tishi_cont">
              <div class="deng">
              <img src="image/deng.jpg"/>
              </div>
              <div class="more_tx">
               <span>重要说明：</span><a>此通道仅记录游戏BUG的反馈，其他问题请您选择正确的提交入口，请详细描述您发现的BUG。</a>
              </div>
          </div>
          </div>
      <div class="cont_form">
          <form class="form-horizontal"  name="myform" action="?m=guestbook&f=myissue&v=bug" method="post" enctype="multipart/form-data">
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
                              <option selected="selected">请选择区服</option>
                              <option value="开天辟地">开天辟地</option>
                              <option value="纵横天下">纵横天下</option>
                              <option value="热血沙场">热血沙场</option>
                              <option value="剑荡八荒">剑荡八荒</option>
                              <option value="五福临门">五福临门</option>
                              <option value="金玉满堂">金玉满堂</option>
                              <option value="春暖花开">春暖花开</option>
                              <option value="风花雪月">风花雪月</option>
                              <option value="春光灿烂">春光灿烂</option>
                              <option value="清风明月">清风明月</option>
                              <option value="义薄云天">义薄云天</option>
                              <option value="问鼎江湖">问鼎江湖</option>
                              <option value="傲气凌云">傲气凌云</option>
                              <option value="龙战于野">龙战于野</option>
                              <option value="侠骨柔情">侠骨柔情</option>
                     	 </select>
          </div>
      
         </div>
         <div class="form_li">
          <div class="formli_left">
           <span>BUG描述：</span>
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
          <input type="submit" class="tijiao_btn" value="提交BUG"/>
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
