<?php
include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/top.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/common/page/pageCheck.php';
//include_once $commonPath . '/page/pageCheck.php';

//  2019-03-25 star 현재 임시로 페이지별 token고정
/*if(!$_SESSION['token'][$Common->nowPage()]){
	$_SESSION['token'][$Common->nowPage()]       =	base64_encode(openssl_random_pseudo_bytes(32));
}*/

?>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		  content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/common/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/common/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="/common/css/jquery-ui.min.css"> -->


	<!-- :: ksg_20200415_1700 single : 페이지 스와이프 관련 스타일 -->
	<link rel="stylesheet" href="/common/css/jquery.mobile-1.4.5.css" />
	

	<link rel="stylesheet" type="text/css" href="/common/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="/common/css/slick.css">



	



	<script src="/common/js/jquery-3.1.1.min.js"></script>
	<script src="/common/js/jquery-ui-1.12.1.js"></script>


	<!-- :: ksg_20200415_1700 single : 페이지 스와이프 관련 js 파일 -->
	<script src="/common/js/jquery-mobile-1.5.0.js"></script>
	<!-- <script src="/common/js/testFile_jquery-mobile-1.5.0.js"></script> -->
	<script src="/testFiles/customSwipePage.js"></script>


	<script src="/common/js/slick.js"></script>
	<script src="/common/js/common.js"></script>
</head>
