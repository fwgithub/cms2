<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
<script src="<?php echo R;?>t2/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/kefu.css">
<script type="text/javascript">
    function check(form) {

        if(form.wjm.value=='') {
            alert("请输入玩家名!");
            form.wjm.focus();
            return false;
        }
        if(form.jbtxt.value==''){
            alert("请输入举报内容!");
            form.jbtxt.focus();
            return false;
        }

        var chk = 0;
        var chkObjs = document.getElementsByName("jubaofl");
        //console.log(chkObjs);

            for(var i=0;i<chkObjs.length;i++){
                if(chkObjs[i].checked){
                    if(chk == i){
                        alert("举报分类没有改变不能提交");
                        return false;
                    }
                }
            }

        return true;
    }
</script>

<div id="main">
    <div class="wt_area">
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
            <div class="head_meun ">
                <a href="index.php?v=listing&cid=44&page=1" target="_self">BUG反馈</a>
            </div>
            <div class="head_meun ">
                <a href="index.php?v=listing&cid=46&page=1" target="_self">问题专区</a>
            </div>
            <div class="head_meun">
                <div class="head_meunb head_on">
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
       <span>重要说明：</span><a>此通道仅提供举报服务，其他问题请您选择正确的提交入口，请详细描述您要举报的内容。</a>
      </div>
      <div class="cont_jbxx">
          <form name="myform" action="?m=guestbook&f=myissue&v=jbxx" method="post" enctype="multipart/form-data">
          <table  cellpadding="0" cellspacing="0">
           <tr height="65">          
                <td width="90" align="right"><span>我要举报：</span></td>
                <td><input type="text" placeholder="被举报的玩家名" class="wjm" name="wjm" maxlength="15"/></td>
               <td align="left" ><p><input type="text" name="type"  style="display:none;" value="4"/></p></td>
           </tr>
             <tr>
            
                      <td align="right" valign="top" width="90"><span>举报内容：</span></td>
                      <td align="left"><p><textarea name="jbtxt" class="jb_box" maxlength="250" minlength="5" ></textarea></p></td>
              
           </tr>
           <tr>
            <td align="right" valign="top" width="90"><span>举报分类：</span></td>
            <td align="left"><p style="color:#F00; font-weight:bold; line-height:35px">（请选择举报信息的类别）</p></td>
           </tr>
           <tr>
            <td colspan="2">
             <div class="radio_1">
             <table cellpadding="0" cellspacing="0">
               <tr align="left">
                <td width="120" align="left"><input type="radio" name="jubaofl" id="dailian" value="代练广告"  class="radio_btn" checked="checked"/><p>代练广告</p></td>
                <td width="160" align="left"><input type="radio" name="jubaofl" id="daida" value="代打广告" class="radio_btn" /><p>代打广告</p></td>
                <td width="220" align="left"><input type="radio" name="jubaofl" id="shuap" value="大量无意义表情符号或字符刷屏" class="radio_btn" /><p>大量无意义表情符号或字符刷屏</p></td>
               </tr>
                <tr align="left">
                <td width="120" align="left"><input type="radio" name="jubaofl" id="feifa" value="卖非法宏广告" class="radio_btn" /><p>卖非法宏广告</p></td>
                <td width="160" align="left"><input type="radio" name="jubaofl" id="manma" value="谩骂、人身攻击信息" class="radio_btn" /><p>谩骂、人身攻击信息</p></td>
                <td width="220" align="left"><input type="radio" name="jubaofl" id="xujia" value="虚假中奖，抽奖，欺骗，钓鱼信息" class="radio_btn"/><p>虚假中奖，抽奖，欺骗，钓鱼信息</p></td>
               </tr>
               <tr align="left">
                <td width="280" align="left" colspan="2"><input type="radio" name="jubaofl" id="maimai" value="通过游戏外渠道卖元宝，卖材料等广告" class="radio_btn" /><p>通过游戏外渠道卖元宝，卖材料等广告</p></td>
                <td width="220" align="left"><input type="radio" name="jubaofl" id="else" value="其他信息" class="radio_btn" /><p>其他信息</p></td>
               </tr>
              </table>
             </div>
            
            </td>
           </tr>
           <tr>
            <td colspan="2"><input type="submit" value="提交" class="small_btn" onclick="return check(this.form)"/></td>
           </tr>
          </table>
          </form>
      </div>

    </div>
</div>

</div>
    <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>

