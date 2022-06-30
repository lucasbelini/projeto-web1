<?php

header("Content-type: text/html; charset=utf-8");
session_start();
//BANCO DE DADOS
define("_BD_HOST_","localhost");
define("_BD_USER_","root");
define("_BD_PASS_","");
define("_BD_PORTA_","3306");
define("_BD_NAME_","Streaming");

define("_ROOT_PATH_", $_SERVER['DOCUMENT_ROOT']."/projeto-web1");
define("_HTTP_PATH_", "http://localhost/");

define("_DATA_", date('d-m-Y'));

define("_ROOT_LIB_PATH_", _ROOT_PATH_ . "/lib/");
define("_ROOT_CLASS_PATH_", _ROOT_PATH_ . "/model/");
define("_ROOT_CTRL_PATH_" , _ROOT_PATH_ . "/control/");
define("_ROOT_VIEW_PATH_" , _ROOT_PATH_ . "/view/");
define("_ROOT_CSS_PATH_" , _ROOT_LIB_PATH_ . "/css/");
define("_ROOT_JS_PATH_" , _ROOT_LIB_PATH_ . "/js/");
define("_ROOT_IMG_PATH_" , _ROOT_LIB_PATH_ . "/img/");

define("_HTTP_ARQUIVO_PATH_", _HTTP_PATH_ . "arquivos/");
define("_HTTP_LIB_PATH_" , _HTTP_PATH_ . "projeto-web1/lib/");
define("_HTTP_CLASS_PATH_" , _HTTP_PATH_ . "model/");
define("_HTTP_CTRL_PATH_" , _HTTP_PATH_ . "control/");
define("_HTTP_VIEW_PATH_" , _HTTP_PATH_ . "view/");
define("_HTTP_CSS_PATH_" , _HTTP_LIB_PATH_ . "css/");
define("_HTTP_JS_PATH_" , _HTTP_LIB_PATH_ . "js/");
define("_HTTP_IMG_PATH_" , _HTTP_LIB_PATH_ . "img/");



//carrega todas as classes ao carregar a pagina
require_once(_ROOT_CLASS_PATH_ . "autoload.php");

