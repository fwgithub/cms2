<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
<script src="<?php echo R;?>t2/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/kefu.css">
<script type="text/javascript">
    function check(form) {

        if(form.bug_biaoti.value=='') {
            alert("请输入标题!");
            form.bug_biaoti.focus();
            return false;
        }
        if(form.bugms.value==''){
            alert("请输入意见!");
            form.bugms.focus();
            return false;
        }
        if(form.bug_sc.value==''){
            alert("请上传文件!");
            form.bug_sc.focus();
            return false;
        }
        return true;
    }
</script>

<div id="main">
  <div class="bug_fk"> 
	<div class="ac_head">
    	<div class="head_meun back">
          <a href="index.php?v=listing&cid=40&page=1" target="_self">客服大厅</a>
        </div>
        <div class="head_meun ">
          <a href="index.php?m=member&f=index&v=account_safe" target="_self">账号安全</a>
        </div>
         <div class="head_meun">
          <a href="index.php?v=listing&cid=43&page=1" target="_self">建议反馈</a>
        </div>
         <div class="head_meun head_on">
          <a href="index.php?v=listing&cid=44&page=1" target="_self">BUG反馈</a>
        </div>
         <div class="head_meun ">
          <a href="index.php?v=listing&cid=46&page=1" target="_self">问题专区</a>
        </div>
         <div class="head_meun">
             <div class="head_meunb ">
              <a href="" target="_self">举报信息</a>
               <div class="head_li">
                <div class="btn_jb"><a href="index.php?v=listing&cid=47&page=1" target="_self">举报不良信息</a></div>
                <div class="btn_wg"><a href="index.php?v=listing&cid=48&page=1" target="_self">举报外挂</a></div>
              </div>
            </div>
        </div>
         <div class="head_meun">
          <a href="index.php?v=listing&cid=45&page=1" target="_self">在线客服</a>
        </div>
         <div class="head_right">
        </div>
    </div>
  <div class="more_cont">
      <div class="more_tx">
       <span>重要说明：</span><a>此通道仅记录游戏BUG的反馈，其他问题请您选择正确的提交入口，请详细描述您发现的BUG。</a>
      </div>
      <div class="cont_form">
          <table cellpadding="0" cellspacing="0">
            <tr height="65">
                  <form name="myform" action="?m=guestbook&f=myissue&v=bug" method="post" enctype="multipart/form-data">
                      <td align="right" width="90"><span>标题：</span></td>
                      <td align="left"><p><input type="text" name="bug_biaoti" class="biaoti" maxlength="20" autocomplete="off"/></p></td>
                      <td align="left" ><p><input type="text" name="type"  style="display:none;" value="2"/></p></td>
            </tr>
             <tr>
              
                      <td align="right" valign="top" width="90"><span>BUG描述：</span></td>
                      <td align="left"><p><textarea name="bugms" class="yj_box" maxlength="250" minlength="5" ></textarea></p></td>
              
            </tr>
             <tr height="50">
              
                      <td align="right" width="90" ><span>上传文件：</span></td>
                      <td align="left"><input type="file" name="bug_sc" class="scwj"/></td>
                
            </tr>
            <tr>
             <td colspan="2">
         
               <input type="submit" class="tijiao_btn" value="提交BUG" onclick="return check(this.form)"/>
              </form>
             </td>
            </tr>
          </table>
       <div class="form_right">
         <p>如果您有相关截图，请上传。如多张图片可打
包压缩以zip或rar的文件格式上传，[限制文
件大小：2M以内]</p>
       </div>
      
       
   
      </div>
    </div>
</div>
<div class="footer">
 <div class="left_foot">
     <img src="<?php echo R;?>t2/image/bangzhu.png" />
     <a href="" target="_blank">武圣帮助</a>
 </div>
    <div class="num">
        <p>若遇到紧急问题，请拨打客服电话：0755-26652163</p>
    </div>
</div>
</div>


</div>
</div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>