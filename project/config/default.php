<?php

	//设置时区
	date_default_timezone_set("Asia/Shanghai");
	
	//设置根目录
	define("ROOT",				dirname(__FILE__)."/../");
	define("ROOT_WWW",			ROOT . "/www");
	define("ROOT_APP",			ROOT . "/app");
	define("ROOT_CONFIG",		ROOT . "/config");
	define("ROOT_SLIGHTPHP",	ROOT . "/../slightphp/");
	define('PLUGINS',	ROOT_SLIGHTPHP . 'plugins/');
	
	//自动加载
	require(ROOT_SLIGHTPHP."/vendor/autoload.php");
	spl_autoload_register(function($class){
		$file = SlightPHP::$appDir."/".str_replace("_","/",$class).".class.php";
		if(is_file($file)) {
			return require_once($file);
		}
	
	});
	
	//加载框架
	require(ROOT_SLIGHTPHP . 'SlightPHP.php');
	
	//设置默认加载目录
	SlightPHP::setAppDir("D:/wamp/www/newlife/project/app");
	SlightPHP::setDefaultZone("default");
	SlightPHP::setDefaultPage("default");
	SlightPHP::setDefaultEntry("index");
	
	/*
	 * 设置模版参数
	 */
	//是否强制编译
	STpl::$force_compile=true;
	//是否安全模式
	STpl::$safe_mode=false;
	//设置模版解析起始
	STpl::$left_delimiter = '{?';
	STpl::$left_delimiter = '?}';
	//设置模版目录ַ
	STpl::$template_dir = 'public/template_dir';
	//设置模版编译目录ַ
	STpl::$compile_dir = 'public/template_c';
?>