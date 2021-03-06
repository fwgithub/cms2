<?php
// +----------------------------------------------------------------------
// | wuzhicms [ 五指互联网站内容管理系统 ]
// | Copyright (c) 2014-2015 http://www.wuzhicms.com All rights reserved.
// | Licensed ( http://www.wuzhicms.com/licenses/ )
// | Author: wangcanjia <phpip@qq.com>
// +----------------------------------------------------------------------
defined('IN_WZ') or exit('No direct script access allowed');
/**
 * 留言板管理
 */
load_class('admin');
class index extends WUZHI_admin {
	private $db;

	function __construct() {
		$this->db = load_class('db');
        $this->status_arr = array(1=>'注册会员',2=>'会员+游客',3=>'后台管理员');
        $this->type = array(0=>'留言',1=>'建议反馈',2=>'BUG',3=>'问题专区',4=>'举报不良信息',5=>'举报外挂');
	}
    /**
     * 留言列表 0留言1建议反馈2BUG3问题专区4举报不良信息5举报外挂
     */
    public function listing() {
        $status_arr = $this->status_arr;
        $page = isset($GLOBALS['page']) ? intval($GLOBALS['page']) : 1;
        $page = max($page,1);
        $result = $this->db->get_list('guestbook', '', '*', 0, 20,$page,'id DESC');
        $pages = $this->db->pages;
        $total = $this->db->number;
        $replys = array('<button type="button" class="btn btn-warning btn-xs">未回复</button>','已回复');
        $ip_location = load_class('ip_location');
        foreach($result as $key=>$rs) {
            $reply = $rs['reply']=='' ? 0 : 1;
            $retype = $rs['type'];
            $result[$key]['status'] = $rs['status']==9 ? $replys[$reply] : '<button type="button" class="btn btn-danger btn-xs">等待审核</button>';
            $result[$key]['ip_location'] = $ip_location->seek($rs['ip'],1);
            $result[$key]['type'] = $this->type[$retype];
        }
        include $this->template('listing');
    }

    /**
     * 回复
     */
    public function reply() {
        $id = $GLOBALS['id'];
        $reply_user = get_cookie('wz_name');
        if(isset($GLOBALS['submit'])) {
            $status = 9;
            if(!empty($GLOBALS['reply_user'])) $reply_user = remove_xss($GLOBALS['reply_user']);
            $this->db->update('guestbook',array('status'=>$status,'reply'=>$GLOBALS['reply'],'replytime'=>SYS_TIME,'reply_user'=>$reply_user),array('id'=>$id));

            $r = $this->db->get_one('guestbook',array('id'=>$id));
            $mr = $this->db->get_one('member', array('username' => $r['publisher']));
            //邮箱有验证状态时发送邮件通知
            if($mr['ischeck_email']) {
                load_function('preg_check');
                $config = get_cache('sendmail');
                $password = decode($config['password']);
                //load_function('sendmail');
                $subject = '有人回复了您的提问，请登录查询';
                $message = "提问内容：".$r['title']."<br>详细回复请登录：<br><a href='".WEBURL."index.php?m=guestbook&f=myissue&v=listing' target='_blank'>".WEBURL.'index.php?m=guestbook&f=myissue&v=listing</a> 查看';
                $mail = load_class('sendmail');
                $mail->setServer($config['smtp_server'], $config['smtp_user'], $password); //设置smtp服务器，普通连接方式
                $mail->setFrom($config['send_email']); //设置发件人
                $mail->setReceiver($mr['email']); //设置收件人，多个收件人，调用多次
                $mail->setMail($subject, $message); //设置邮件主题、内容
                $mail->sendMail(); //发送
            }
            MSG(L('operation success'),$GLOBALS['forward']);
        } else {
            load_class('form');
            $r = $this->db->get_one('guestbook',array('id'=>$id));
            $model_r = $this->db->get_one('model',array('m'=>'guestbook'));
            require get_cache_path('guestbook_form','model');
            $form_build = new form_build($model_r['modelid']);

            $formdata = $form_build->execute($r);
            //print_r($r);
            include $this->template('reply');
        }
    }

    /**
     * 删除留言
     */
    public function delete() {
        $id = intval($GLOBALS['id']);
        $this->db->delete('guestbook',array('id'=>$id));
        MSG(L('delete success'),HTTP_REFERER,1500);
    }
}