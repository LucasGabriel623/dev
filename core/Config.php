<?php
session_start();
ob_start();

define('URL', 'http://localhost/dev/');
define('URLADM', 'http://localhost/devUsuario/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'devUsuario');

/*define('URL', 'https://projetosdev.info/usuarios/');
define('URLADM', 'https://projetosdev.info/usuarios/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'u224083565_devusuario');
define('PASS', 'Dev#1449#');
define('DBNAME', 'u224083565_usuarios');*/

