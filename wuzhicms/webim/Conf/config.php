<?php

return array(
	//DB配置
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'webim', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'webim_', // 数据库表前缀	


	'KEFU_MAX' => 8,    //每个客服最多接听人数

	//IM配置
	'IMC' => array(
		'version'	=> '5.8',		//IM版本
		'debug'     => true,		//DEBUG模式
		'isopen'	=> true,		//开启webim
		'domain' 	=> 'localhost',	//消息服务器通信域名
		'apikey'	=> 'public',	//消息服务器通信APIKEY
		'server'    => array('t.nextalk.im:8000'),//IM服务器
		'theme'		=> 'base',		//界面主题，根据webim/static/themes/目录内容选择
		'local'		=> 'zh-CN',		//本地语言，扩展请修改webim/static/i18n/内容
		'emot'		=> 'default',	//表情主题
		'opacity'	=> 80,			//TOOLBAR背景透明度设置
		'visitor'	=> true, 		//支持访客聊天(默认好友为站长),开启后通过im登录无效
		'upload'	=> true,	//是否支持文件(图片)上传
		'robot'		=> true,   //是否支持机器人
		'show_realname'		=> true,	//是否显示好友真实姓名
		'show_unavailable'	=> true, //支持显示不在线用户
		'enable_login'		=> true,	//允许未登录时显示IM，并可从im登录
		'enable_menu'		=> true,	//隐藏工具条
		'enable_room'		=> true,	//禁止群组聊天
        'discussion'        => true,   //临时讨论组
		'enable_noti'		=> true,	//通知
		'enable_chatlink'	=> true,	//页面名字旁边的聊天链接
		'enable_chatbtn'	=> true,	//支持聊天按钮
		'enable_shortcut'	=> true,	//支持工具栏快捷方式
	),
);

?>
