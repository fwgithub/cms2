<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
<link type="text/css" rel="stylesheet" href="<?php echo R;?>h1jk/css/tijiancenter_style.css">

<script src="http://www.h1jk.cn/res/js/wuzhicms.js"></script>
<link rel="stylesheet" href="http://www.h1jk.cn/res/js/dialog/ui-dialog.css" />
<script src="http://www.h1jk.cn/res/js/dialog/dialog-plus.js"></script>
<link href="http://www.h1jk.cn/res/js/jquery-ui/jquery-ui.css" rel="stylesheet">
<link href="http://www.h1jk.cn/res/css/validform.css" rel="stylesheet" />
<script src="http://www.h1jk.cn/res/js/validform.min.js"></script>
<script src="http://www.h1jk.cn/res/js/raty/jquery.raty.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo R;?>raty/jquery.raty.css">

<!-- ---------------------------------- -->
<!-- taocai我要点评-->
<!-- ---------------------------------- -->
<style type="text/css">
 #huanjing_ul li {
  text-indent: inherit;
  list-style: none;
  float: left;
  padding: 10px;
 }
 #huanjing_ul li img{
   width: 124px;
 }
 .inline-ups{
  width: 100%;
  display: inline-block;
 }
</style>
<div class="tjcenter_dianping">
 <div class="container">
  <div class="row">
   <div class="col-xs-9">
    <div class="dp_left">
     <h4 class="margin_bottom20"><span class="glyphicon glyphicon-edit"></span> 我要点评</h4>
     <div class="panel panel-default">
      <div class="panel-body">
       <p style="padding:16px 16px; border-bottom: 1px  dotted #ddd; color:#999"><span class="color_heyilan font_weight"><a href="<?php echo $data['url'];?>"> <?php echo $data['title'];?></a></span> <span class="font_size12 color_777">&nbsp;&nbsp;&nbsp;&nbsp;点击星星为套餐打分(带<span class="color_heyihong"> * </span>为必填项) </span></p>
       <form name="myform" id="myform" method="post" action="">
        <input type="hidden" name="form[field1]" id="field1" value="5">
        <input type="hidden" name="form[field2]" id="field2" value="5">
        <input type="hidden" name="form[field3]" id="field3" value="5">
        <input type="hidden" name="keyid" value="<?php echo $keyid;?>">

        <table width="100%" border="0" cellspacing="0" cellpadding="8">
        <tr>
         <td style="vertical-align:text-top ;padding:16px 8px;"><div align="right">点星打分：<span class="color_heyihong"> * </span></div></td>
         <td colspan="2"  style="padding:16px 8px;">总体评价：<span id="star1" class="starWrapper"></span>

          &nbsp;&nbsp;&nbsp;&nbsp套餐：<span id="star2" class="starWrapper"></span> </td>
        </tr>
        <tr>
         <td width="15%" style="vertical-align:text-top"><div align="right">评价：<span class="color_heyihong"> * </span></div></td>
         <td colspan="2"><textarea name="form[field5]" class="form-control" rows="3" datatype="*2-200"  nullmsg="请输入评价内容" errormsg="至少2个字符,最多200个字符！"></textarea></td>
        </tr>
        <tr>
         <td style="vertical-align:text-top"><div align="right">上传图片：</div></td>
         <td colspan="2">
          <div class="col-sm-12 input-group">
           <div class="attaclist"><script src="http://www.h1jk.cn/res/js/dialog/dialog-plus.js"></script><script type="text/javascript" src="http://www.h1jk.cn/res/js/json2.js"></script><script type="text/javascript" src="http://www.h1jk.cn/res/js/html5upload/plupload.full.min.js"></script><script type="text/javascript" src="http://www.h1jk.cn/res/js/html5upload/extension.js"></script><div id="huanjing"><ul id="huanjing_ul" class="ui-sortable"></ul></div><div class="inline-ups"><button type="button" onclick="openiframe('/index.php?m=attachment&f=index&v=upload_dialog&callback=callback_dianping&htmlid=huanjing&limit=20&htmlname=form%5Bdata%5D&amp;','huanjing','loading...',810,400,20)">上传图片</button></div></div>                                <span class="tablewarnings"></span>
          </div>
          <p class="help-block color_999 font_size12">单张图片不超过10MB，尺寸不小于300*300px，支持jpg、png和bmp。</p>
         </td>
        </tr>

        <tr>
         <td>&nbsp;</td>
         <td colspan="2"><span style="float:left"><button type="submit" name="submit" class="btn btn-danger_g" id="save-bt" >提交点评 </button> </span></td>
        </tr>
       </table>

</form>
      </div>
     </div>
    </div>
   </div>
   <div class="col-xs-3">
    <div class="dp_right">

     <h5 style="">最新会员点评<span style="font-weight:normal; font-size:12px"><a href="">(<?php echo $data['hits'];?>封)</a></span></h5>

     <?php if(defined('IN_ADMIN') && !defined('HTML')) {
	echo "<div class=\"visual_div\" pc_action=\"dianping\" data=\"\"><a href=\"javascript:void(0)\" class=\"visual_edit\">修改</a>";
}
if(!class_exists('dianping_template_parse')) {
	$dianping_template_parse = load_class("dianping_template_parse", "dianping");
}
if (method_exists($dianping_template_parse, 'listing')) {
	$rs = $dianping_template_parse->listing(array('keyid'=>$keyid,'start'=>'0','pagesize'=>'5','page'=>'0',));
	$pages = $dianping_template_parse->pages;$number = $dianping_template_parse->number;}?>
     <?php $n=1;if(is_array($rs)) foreach($rs AS $r) { ?>
     <div class="media media_add">
      <div class="media-body">
       <span class="color_heyilan"><?php echo $r['username'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class=" color_999 font_size12">总体评价：<span class="score-value-no" style="display:inline-block"><em style="width: <?php echo intval($r['field1']*20);?>%"></em></span></span>
       <p><?php echo $r['field5'];?></p>
      </div>
     </div>
     <?php $n++;}?>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>
   </div>
  </div>
 </div>
</div>

<script type="text/javascript">

 $(function(){
  $("#myform").Validform({
   tiptype:1
  });
 })
 $("#save-bt").click(function(){
  t=setTimeout("hide_formtips()",3000);
 });
 function hide_formtips() {
  $.Hidemsg();
  clearInterval(t);
 }
 $('#star1').raty({
  score: 5,
  starOff  : 'http://www.h1jk.cn/res/h1jk/image/xingxing.gif',
  starOn   : 'http://www.h1jk.cn/res/h1jk/image/xingxingh.gif',
  click: function(score, evt) {
   $("#field1").val(score);
  }
 });
 $('#star2').raty({
  score: 5,
  starOff  : 'http://www.h1jk.cn/res/h1jk/image/xingxing.gif',
  starOn   : 'http://www.h1jk.cn/res/h1jk/image/xingxingh.gif',
  click: function(score, evt) {
   $("#field2").val(score);
  }
 });
 $('#star3').raty({
  score: 5,
  starOff  : 'http://www.h1jk.cn/res/h1jk/image/xingxing.gif',
  starOn   : 'http://www.h1jk.cn/res/h1jk/image/xingxingh.gif',
  click: function(score, evt) {
   $("#field3").val(score);
  }
 });
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>