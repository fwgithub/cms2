<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
<section class="showct">
    <section class="cbox ">
        <h5><?php echo $title;?></h5>
        <article class="ctbox clear-text-indent">
<?php echo $content;?>
        </article>
        <div class="share">
            <dl>
                <dt>����</dt>
                <dd>
                    <script type="text/javascript">document.write('<a href="http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&appkey=3172366919&title='+encodeURIComponent('����ͳ�����������ձ����Ƚ��ο��������')+'" title="��������΢��" class="sharewb" target="_blank">&nbsp;</a>');</script>
                    <script type="text/javascript">document.write('<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(location.href)+'" title="����QQ�ռ�" class="shareqzone" target="_blank">&nbsp;</a>');</script>
                    <a href="javascript:void(0)" class="sharewx"></a>
                    <a href="javascript:void(0)" class="shareqq"></a>
                </dd>
            </dl>
        </div>
    </section>

</section>
<script type="text/javascript">

</script>
<footer class="ft">
    Copyright 2005 - 2014 WuzhiCMS. All Rights Reserved
</footer>
</body>
</html>
