<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<script src="<?php echo R;?>member/js/jscarousel.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jsCarousel').jsCarousel({ onthumbnailclick: function(src) {
            // 可在这里加入点击图片之后触发的效果
            $("#overlay_pic").attr('src', src);
            $(".overlay").show();
        }, autoscroll: true });

        $(".overlay").click(function(){
            $(this).hide();
        });
    });
</script>
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
                        <header class="panel-heading"><span class="title">预约列表</span></header>


                        <div id="myTabContent" class="tab-content tabsbordertop">

                            <div role="tabpanel" class="tab-pane fade active in" id="tabs1" aria-labelledby="1tab">
                                <div class="panel-body" id="panel-bodys">
                                    <table class="table table-striped table-advance table-hover text-center">
                                        <thead>
                                        <tr>
                                            <th class="tablehead">订单号</th>
                                            <th class="tablehead">套餐名称</th>
                                            <th class="tablehead">预约时间</th>
                                            <th class="tablehead">体检中心</th>
                                            <th class="tablehead">状态</th>
                                            <th class="tablehead">操作</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php $n=1;if(is_array($result)) foreach($result AS $r) { ?>
                                        <tr>
                                            <td class="orderlist"><?php echo $r['card_no'];?></td>
                                            <td class="orderlist"><a href="<?php echo WEBURL;?>index.php?m=order&v=order_point_detail&orderid=<?php echo $r['orderid'];?>"><?php echo $r['remark'];?></a></td>
                                            <td class="orderlist"><?php echo $r['tjtime'];?></td>
                                            <td class="orderlist"><?php echo $r['mecname'];?></td>
                                            <td class="orderlist"><?php echo $status[$r['status']];?></td>
                                            <td class="orderlist"><?php if($r['status']==2) { ?><a href="/index?m=dianping&f=index&v=dianping&keyid=tg<?php echo $r['tid'];?>&orderid=<?php echo $r['id'];?>" class="btn btn-order">立即点评</a><?php } elseif ($r['status']==1 || $r['status']==6) { ?>
                                                <a class="btn" href="index.php?m=order&f=order_form&v=cancel&id=<?php echo $r['id'];?>&acbar=3">取消预定</a>
                                                <?php } ?> <?php if($r['fileurl']) { ?><a href="<?php echo $r['fileurl'];?>" class="btn btn-default">报告查询</a><?php } ?></td>
                                        </tr>
                                        <?php $n++;}?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($total>20) { ?>
                                <div class="paginationpage text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <?php echo $pages;?>
                                        </ul>
                                    </nav>
                                </div>
                                <?php } ?>
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
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','foot'); ?>

