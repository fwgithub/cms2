<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!DOCTYPE html>
<html allowtransparency="true" @import  url("kefu.css") screen and (max-device-width: 400px);>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    　　　　<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    　　<![endif]-->
    <title>客服专区</title>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 794px)" href="<?php echo R;?>t2/css/gwkefu.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 794px) and (max-width: 1920px)" href="<?php echo R;?>t2/css/gwstyle.css" />
    <script type="text/javascript" src="<?php echo R;?>t2/js/jquery.js"></script>
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
        <img src="<?php echo R;?>t2/image/logo.png" >
        <b>武圣客服专区</b>
        <div class="logo_right">
            <a href="" target="_blank">注册</a>
            <span>|</span>
            <a href="" target="_blank">充值</a>
            <span>|</span>
    <span class="more_game">
      <p>光环游戏</p>
      <img src="<?php echo R;?>t2/image/point_down.png">
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
        <a href="" target="_blank" class="web_on">首页</a>
        <a href="/" target="_blank">武圣官网</a>
        <a href="/" target="_blank">用户中心</a>
        <a href="/" target="_blank">公告</a>
        <img src="<?php echo R;?>t2/image/biaoyu.png">
    </div>
</div>
<div id="main">
    <div class="cont_top">
        <a href="index.html" class="top_on" style="background:url('<?php echo R;?>t2/image/top_li.png') no-repeat right center;">客服专区</a>
        <a href="bangzhu.html">武圣帮助</a>
    </div>
    <div class="content">

        <div class="cont_left">
            <div class="webcont_top">
                <div class="conttop_banner">
                    <img src="<?php echo R;?>t2/image/banner1.jpg">
                </div>

                <div class="lefttop">
                    <img src="<?php echo R;?>t2/image/sj.png">
                    <span>武圣客服专区帮助引导</span>
                </div>
                <div class="left_login">
                    <div class="login_cont">
                        <h3>欢迎进入武圣客服中心</h3>
                        <p>亲爱的玩家</p>

                        <ul id="mylogin" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo WEBURL;?>index.php?m=member&v=register">注册</a></li>
                            <li><a href="<?php echo WEBURL;?>index.php?m=member&v=login">登录.</a></li>
                        </ul>
                        <?php if($_SESSION['uid']) {?>
                            asdf
                        <?php }?>
                        <div class="look_btn">
                            <a href="" target="_blank">查询问题办理进度</a>
                        </div>

                    </div>
                    <div class="lefttxt">
                        <p>为尽快给广大玩家解决各类问题，特开此通道为玩家提供便利。
                            我们会以最快的速度为玩家解决问题。</p>
                    </div>
                </div>
            </div>
            <div class="web_gonggao">
                <div class="gg_left">
                    <b>客服公告：</b>
                </div>
                <div class="gg_right">
                    <span>即日起正式开通此通道为广大玩家提供便利！</span>
                </div>
            </div>
            <div class="left_meun">
                <div class="meun_btn anquan">
                    <a href="index.php?m=member&f=index&v=account_safe" target="_self" title="账号安全">账号安全</a>
                </div>
                <div class="meun_btn jianyi1">
                    <a href="index.php?v=listing&cid=52&page=1" target="_self" title="建议反馈">建议反馈</a>
                </div>
                <div class="meun_btn bug">
                    <a href="index.php?v=listing&cid=53&page=1" target="_self" title="BUG反馈">BUG反馈</a>
                </div>
                <div class="meun_btn wenti">
                    <a href="index.php?v=listing&cid=54&page=1" target="_self" title="问题专区">问题专区</a>
                </div>
                <div class="meun_btn jubao">
                    <a href="index.php?v=listing&cid=55&page=1" target="_self" title="举报信息">举报信息</a>
                </div>
                <div class="meun_btn kefu">
                    <a href="index.php?v=listing&cid=56&page=1" target="_self" title="在线客服">在线客服</a>
                </div>
            </div>
            <div class="left_btom">
                <div class="btom_li xinl">
                    <img src="<?php echo R;?>t2/image/weibo.png"/>
                    <span>新浪微博</span>
                    <p>通过新浪微博，</p>
                    <p>即时获知更多武圣资讯。</p>
                </div>
                <div class="btom_li weixin">
                    <img src="<?php echo R;?>t2/image/weixin.png"/>
                    <span>官方微信</span>
                    <p>扫一扫关注微信，</p>
                    <p>即时获知更多武圣资讯。</p>
                </div>
                <div class="btom_li qq">
                    <img src="<?php echo R;?>t2/image/qq.png"/>
                    <span>QQ交流</span>
                    <p>QQ群：363313352，加入</p>
                    <p>交流群与其他玩家一起交流</p>
                </div>
                <div class="btom_li phone">
                    <img src="<?php echo R;?>t2/image/phone.png"/>
                    <span>客服电话</span>
                    <p>0755-26652163</p>
                    <p>7X24小时客户服务电话</p>
                </div>
            </div>

        </div>

        <div class="cont_right">
            <img src="<?php echo R;?>t2/image/right_bg.png" />

        </div>
    </div>
    <div class="footer">

        <div class="num">
            <p>若遇到紧急问题，请拨打客服电话：0755-26652163</p>
        </div>
    </div>
</div>
<div id="foot">
    <div class="foot_cont">
        <div class="fcont_top">
            <img src="<?php echo R;?>t2/image/flogo.png"/>
            <a href="" target="_blank"><img src="<?php echo R;?>t2/image/www.png"/></a>
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
