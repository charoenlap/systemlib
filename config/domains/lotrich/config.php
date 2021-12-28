<?php
  	define('DEBUG_MODE',false);
  	define('PRODUCTION',false);

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
 
	// $base = str_replace('required', '', __DIR__);
	// var_dump($_SERVER);exit();
	define('cache_db','0');
	$base = $_SERVER['DOCUMENT_ROOT'].'/lotrich/public_html/';
	if(PRODUCTION){
		// Config DB SERVER
		define('PREFIX', 'b_');
		define('DB_HOST','localhost');
		define('DB_USER','charoenlap_ro');
		define('DB_PASS','V0ILSEEHH');
		define('DB_DB','charoenlap_ro');
		define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/');
		define('MURL','https://ro.charoenlap.com/');
	}else{
		// Config DB localhost
		define('PREFIX', 'b_');
		define('DB_HOST','localhost');
		define('DB_USER','root');
		define('DB_PASS','root');
		define('DB_DB','lotrich');
		define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/lotrich/lib/');
		define('MURL','http://localhost/lotrich/public_html/');
	}
  	define('PATH_LIB',$_SERVER['DOCUMENT_ROOT'].'/lotrich/lib/system/lib/');
  	define('PATH_JSON',$_SERVER['DOCUMENT_ROOT'].'/lotrich/json/');
  	define('PATH_UPLOAD',$_SERVER['DOCUMENT_ROOT'].'/lotrich/private_uploads/');
	
	define('DATE_FORMAT','Y-m-d');

	// define('MURL','https://www.fsoftpro.com/dohung/');
	
	define('ROW_IN_DOC','10');
	define('BYTE_PER_KB','1000');
	 
	// define('app_id','166994808024757');
	// define('app_secret','b0bf73fa492cfd8b4d0125eeda9d5e51');
	// define('default_graph_version','v2.10');

	// define('GOOGLE_CLIENT_ID', '310104410325-k5ufrsold5trpadn00c424vidtqc2lpt.apps.googleusercontent.com');
	// define('GOOGLE_CLIENT_SECRET', 'k-mfqWUZaQoL5r-rpu9NM1fP');
	// define('GOOGLE_REDIRECT_URL', MURL.'index.php?route=user/gmailCallback');

	define('DEFAULT_PAGE','home');
	define('WEB_NAME','');
	define('IMAGE',MURL.'uploads/');
	define('IMAGE_PHOTO',MURL.'uploads/photo/'); 
	define('NO_PHOTO',MURL.'uploads/no_photo.jpg');
	define('DB','mysqli');
	define('KEY', 'appcom@fsp88');
	
	
	// Production
	// define('PREFIX', 'dh_');
	// define('DB_HOST','localhost');
	// define('DB_USER','fsoftpro_dhpro');
	// define('DB_PASS','29bGG94RSg');
	// define('DB_DB','fsoftpro_dhpro');

	// System config 
	define('DEFAULT_LANGUAGE','1');
	define('DEFAULT_LIMIT_PAGE','10');

	// email ssl
	define('email_username','lotrich.info@gmail.com');
	define('email_password','l0trich168');
	define('email_host','smtp.gmail.com');
	define('email_port','465');
	define('email_send','lotrich.info@gmail.com');
	define('email_stmpsecure','ssl');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require PATH_LIB.'PHPMailer-master-7/src/Exception.php';
	require PATH_LIB.'PHPMailer-master-7/src/PHPMailer.php';
	require PATH_LIB.'PHPMailer-master-7/src/SMTP.php';
	global	$mail ;
	$mail = new PHPMailer(true); //New instance, with exceptions enabled
?>