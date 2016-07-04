<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<link rel="stylesheet" href="http://www.h1jk.cn/res/js/dialog/ui-dialog.css" />
<script src="http://www.h1jk.cn/res/js/dialog/dialog-plus.js"></script>
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

                <div class="memberbordertop">
                    <section class="panel">
                        <header class="panel-heading"><span class="title">我的发布</span></header>

                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tabs1" id="1tab" role="tab" data-toggle="tab" aria-controls="tabs1" aria-expanded="true">最新信息</a></li>
                            <li role="presentation" class=""><a href="#tabs2" role="tab" id="2tab" data-toggle="tab" aria-controls="tabs2" aria-expanded="false">显示中的信息</a></li>
                            <li role="presentation" class=""><a href="#tabs3" role="tab" id="3tab" data-toggle="tab" aria-controls="tabs3" aria-expanded="false">审核中的信息</a></li>
                            <li role="presentation" class=""><a href="#tabs4" role="tab" id="4tab" data-toggle="tab" aria-controls="tabs4" aria-expanded="false">已删除的信息</a></li>
                        </ul>

                        <div class="submitbtn"><a href="?m=content&f=postinfo&v=newinfo" class="btn">免费发布信息</a></div>


                        <div id="myTabContent" class="tab-content tabsbordertop">

                            <div role="tabpanel" class="tab-pane fade active in" id="tabs1" aria-labelledby="1tab">
                                <div class="panel-body" id="panel-bodys">
                                    <table class="table table-striped table-advance table-hover text-center">
                                        <tbody>
                                        <?php $n=1;if(is_array($result1)) foreach($result1 AS $r) { ?>
                                        <tr>
                                            <td colspan="3" class="text-left mysubmit"><span class="uptime">更新时间: <?php echo date('Y-m-d H:i:s',$r['updatetime']);?></span> <span class="number">编号：<?php echo $r['id'];?></span> <span class="pull-right"><a href="?m=content&f=mecinfo&v=editinfo&id=<?php echo $r['id'];?>" class="btn btn-order">修改</a> <a href="?m=content&f=mecinfo&v=delinfo&id=<?php echo $r['id'];?>"  class="btn btn-del">删除</a></span></td>
                                        </tr>
                                        <tr>
                                            <td class="submitlist"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></td>
                                            <td><div class="progress">
                                                <?php if($r['status']==9) { ?>
                                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">显示中</div>
                                                <?php } elseif ($r['status']==0) { ?>
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">已删除</div>
                                                <?php } elseif ($r['status']>0) { ?>
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">审核中</div>
                                                <?php } ?>
                                            </div></td>
                                            <td><a href="javascript:referer(<?php echo $r['id'];?>);" class="btn btn-white">刷新</a> <a href="javascript:settop(<?php echo $r['id'];?>);" class="btn btn-white">置顶</a></td>
                                        </tr>
<?php $n++;}?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($total>20) { ?>
                                <!--分页开始-->
                                <div class="paginationpage text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <?php echo $pages;?>
                                        </ul>
                                    </nav>
                                </div>
                                <?php } ?>
                                <!--分页结束-->

                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="tabs2" aria-labelledby="2tab">
                                <table class="table table-striped table-advance table-hover text-center">
                                    <tbody>
                                    <?php $n=1;if(is_array($result2)) foreach($result2 AS $r) { ?>
                                    <tr>
                                        <td colspan="3" class="text-left mysubmit"><span class="uptime">更新时间: <?php echo date('Y-m-d H:i:s',$r['updatetime']);?></span> <span class="number">编号：<?php echo $r['id'];?></span> <span class="pull-right"><a href="?m=content&f=mecinfo&v=editinfo&id=<?php echo $r['id'];?>" class="btn btn-order">修改</a> <a href="?m=content&f=mecinfo&v=delinfo&id=<?php echo $r['id'];?>"  class="btn btn-del">删除</a></span></td>
                                    </tr>
                                    <tr>
                                        <td class="submitlist"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></td>
                                        <td><div class="progress">
                                            <?php if($r['status']==9) { ?>
                                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">显示中</div>
                                            <?php } elseif ($r['status']==0) { ?>
                                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">已删除</div>
                                            <?php } elseif ($r['status']>0) { ?>
                                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">审核中</div>
                                            <?php } ?>
                                        </div></td>
                                        <td><a href="javascript:referer(<?php echo $r['id'];?>);" class="btn btn-white">刷新</a> <a href="javascript:settop(<?php echo $r['id'];?>);" class="btn btn-white">置顶</a></td>
                                    </tr>
                                    <?php $n++;}?>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tabs3" aria-labelledby="3tab">
                                <table class="table table-striped table-advance table-hover text-center">
                                    <tbody>
                                    <?php $n=1;if(is_array($result3)) foreach($result3 AS $r) { ?>
                                    <tr>
                                        <td colspan="3" class="text-left mysubmit"><span class="uptime">更新时间: <?php echo date('Y-m-d H:i:s',$r['updatetime']);?></span> <span class="number">编号：<?php echo $r['id'];?></span> <span class="pull-right"><a href="?m=content&f=mecinfo&v=editinfo&id=<?php echo $r['id'];?>" class="btn btn-order">修改</a> <a href="?m=content&f=mecinfo&v=delinfo&id=<?php echo $r['id'];?>"  class="btn btn-del">删除</a></span></td>
                                    </tr>
                                    <tr>
                                        <td class="submitlist"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></td>
                                        <td><div class="progress">
                                            <?php if($r['status']==9) { ?>
                                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">显示中</div>
                                            <?php } elseif ($r['status']==0) { ?>
                                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">已删除</div>
                                            <?php } elseif ($r['status']>0) { ?>
                                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">审核中</div>
                                            <?php } ?>
                                        </div></td>
                                        <td></td>
                                    </tr>
                                    <?php $n++;}?>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tabs4" aria-labelledby="4tab">
                                <table class="table table-striped table-advance table-hover text-center">
                                    <tbody>
                                    <?php $n=1;if(is_array($result4)) foreach($result4 AS $r) { ?>
                                    <tr>
                                        <td colspan="3" class="text-left mysubmit"><span class="uptime">更新时间: <?php echo date('Y-m-d H:i:s',$r['updatetime']);?></span> <span class="number">编号：<?php echo $r['id'];?></span></td>
                                    </tr>
                                    <tr>
                                        <td class="submitlist"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></td>
                                        <td><div class="progress">
                                            <?php if($r['status']==9) { ?>
                                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">显示中</div>
                                            <?php } elseif ($r['status']==0) { ?>
                                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">已删除</div>
                                            <?php } elseif ($r['status']>0) { ?>
                                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">审核中</div>
                                            <?php } ?>
                                        </div></td>
                                        <td></td>
                                    </tr>
                                    <?php $n++;}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </section>
                </div>

            </div>
            <!--右侧结束-->


        </div>
    </div>
</div>
<script>
    function referer(id) {
        var d = dialog({
            title: '提示',
            content: '刷新将消耗您10点积分',
            okValue: '确定',
            ok: function () {
                $.post("?m=content&f=mecinfo&v=referer", { id: id, time: "2pm" },
                        function(data){
                            if(data==1) {
                                var xb = dialog({
                                    content: '刷新成功！'
                                });
                                xb.show();
                                setTimeout(function () {
                                    xb.close().remove();
                                }, 2000);
                            } else if(data==2) {
                                var xb = dialog({
                                    content: '您的积分不足，刷新失败！'
                                });
                                xb.show();
                                setTimeout(function () {
                                    xb.close().remove();
                                }, 2000);
                            }
                        });

            },
            cancelValue: '取消',
            cancel: function () {}
        });
        d.show();

    }
    function settop(id) {
        var xb = dialog({
            content: '置顶功能需要您联系客服！'
        });
        xb.show();
        setTimeout(function () {
            xb.close().remove();
        }, 3000);
    }
</script>
<!--正文部分-->
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','foot'); ?>

