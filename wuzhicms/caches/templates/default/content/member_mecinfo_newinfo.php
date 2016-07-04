<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<link href="http://www.h1jk.cn/res/css/validform.css" rel="stylesheet" />
<script src="http://www.h1jk.cn/res/js/validform.min.js"></script>
<!--正文部分-->
<div class="container adframe">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            
        </div>
    </div>
</div>

<div class="container memberframe">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <!--左侧开始-->
            <div class="memberleft">
                <div class="membertitle"><h3>会员中心</h3></div>
                <div class="memberborder">
                    <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','left'); ?>
                </div>
            </div>
            <!--左侧结束-->

            <!--右侧开始-->
            <div class="memberright">

                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tabs1" id="1tab" role="tab" data-toggle="tab" aria-controls="tabs1" aria-expanded="true">产品信息发布</a></li>
                    <li role="presentation" class=""><a href="?m=content&f=mecinfo&v=listing">我发布的信息</a></li>
                    <li class="tip-a" style="float:right;">温馨提示：我们的客服会在24小时内审核。全国免费咨询电话：400-001-0278</li>
                </ul>
                <div class="memberbordertop">
                    <section class="panel">
                        <div class="panel-body" id="panel-bodys">
                            <form class="form-horizontal" role="form" name="myform" action="" method="post">
                                <table class="table table-striped table-advance table-hover text-center">
                                    <tbody>

                                    <tr><td class="tablehead left"><h5>体检中心信息</h5></td></tr>
                                    <tr>
                                        <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">所属体检中心：</label><div class="col-sm-7 text-left"><label class="radio-inline">
                                            <?php echo $mec['title'];?>
                                        </label></div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">体检中心地址：</label><div class="col-sm-7 text-left"><label class="radio-inline">
                                            <?php echo $mec['address'];?>
                                        </label></div></div></td>
                                    </tr>
                                    <tr><td class="tablehead"><h5>信息详情</h5></td></tr>
                                    <tr>
                                        <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"><font color="red">*</font> 标题：</label><div class="col-sm-7 text-left"><input type="text" class="form-control" placeholder="如：请输入信息内容" name="form[title]" datatype="*" nullmsg="请输入信息内容"></div></div></td>
                                    </tr>


                                    <tr>
                                        <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"><font color="red">*</font> 截止时间：</label><div class="col-sm-3 text-left"><?php echo $endtime;?></div></div></td>
                                    </tr>

                                    <tr>
                                        <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"><font color="red">*</font>详情：</label><div class="col-sm-10 text-center"><?php echo $editor;?></div></div></td>
                                    </tr>


                                    <tr>
                                        <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"> </label><div class="col-sm-3 text-left"><input type="submit" name="submit" id="submit" value="提交" class="btn btn-order"></div></div></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>

                </div>

                </section>
            </div>

        </div>
            <!--右侧结束-->


        </div>
    </div>
</div>
<!--正文部分-->
<script type="text/javascript">
    $("#submit").click(function(){
        t=setTimeout("hide_formtips()",2000);
    });
    function hide_formtips() {
        $.Hidemsg();
        clearInterval(t);
    }
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:1
        });
    })
    </script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','foot'); ?>

