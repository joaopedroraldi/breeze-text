<?php
/*	if($_SERVER["HTTPS"] != "on") {
		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
		exit();
	} */

	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$title = "Breeze Text - Clean text production blackboard";
	$metadescriptiontag = "Breeze Text";

	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');


	$pasta = "/breeze-text/";
	define('RAIZ', "{$pasta}");
	define('RAIZ_UP', "{$pasta}uploads/");
?>
