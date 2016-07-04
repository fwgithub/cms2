<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
        <style type="text/css">
            .calendar{
                width: 100%;
                border: #0785d1 1px solid;
            }
            .calendar td{
                border: #0785d1 1px solid;
            }
            .currentdate{
                background-color: #a52a2a;
            }
        </style>
<div class="container membercenter">
    <div class="row">
        <div class="span3 memberleft">
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','left'); ?>
        </div>
        <div class="memberright">
            <form name="myform" method="post" action="">
            <div class="memberframe order">
                <div class="memberinfotitle"><h4>填写预约体检信息</h4></div>
                <div class="orderstate"><strong>1 选择体检套餐：</strong></div>
    <!-- 从预约卡中选择 -->
                <?php $n=1;if(is_array($result)) foreach($result AS $r) { ?>
                <input type="radio" name="cardid" value="<?php echo $r['cardid'];?>"> <?php echo $r['title'];?> <a href="">[查看该套餐详情]</a>
                <?php $n++;}?>
                <input type="button" name="setid" id="setid" value="确认选择套餐" class="btn btn-submit"/>
                <div class="orderstate"><strong>2 选择体检机构：</strong></div>
                请选择城市：<select name="city" onchange="getmeclist(this.value)">
                <option value="0">请选择</option>
                <option value="30">北京</option>
                <option value="31">宝鸡</option>
                </select>
                <div id="wzlist"></div>
                <div class="orderstate"><strong>3 选择体检时间：</strong></div>
<div id="dateshow">
                <?php
                $dateComponents = getdate();
$month = $dateComponents['mon'];
$year = $dateComponents['year'];
echo build_calendar($month,$year,$dateArray);
?></div>
            </div>
<input type="text" name="tjtime" id="tjtime" value="0">
<input type="hidden" name="v"  value="save">
                <input type="submit" name="submit" value="提交">
            </form>
        </div>
    </div>


</div>
        <script type="text/javascript">
            function getmeclist(cityid) {
                $.getJSON("index.php?m=content&f=json&v=listing&cid="+cityid+"&pagesize=20&page=1", function(data) {
                    if(data=='finish') {
                        $("#wzlist").html('');
                    } else {
                        $.each(data, function(i,item){
                            $("#wzlist").html('<li><div class="bl"><div><label><input type="radio" name="mecid" value="'+item.id+'"> '+item.title+'</label></div><div><span class="nums">'+item.catname+'</span><span class="times">'+item.address+'</span><span><a href="'+item.url+'" target="_blank">［查看详情］</a></span></div></div></li>');

                        });

                    }
                });
            }
            function setdate(y,m,d,obj) {
            $('.calendar td').removeClass('currentdate');
            $(obj).parent().addClass('currentdate');
            $("#tjtime").val(y+'-'+m+'-'+d);
            }
           function setmonth(d) {
               $("#dateshow").load("index.php?m=order&f=json&v=setmonth&d="+d);
            }
        </script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','foot'); ?>
