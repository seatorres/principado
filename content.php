<?php
/* Agrega conexion a la base de datos*/
require_once "config/database.php";
/* llama a la funcion que contiene los formatos de fecha */
require_once "config/date_format.php";

// Redireccion al home
if ($_GET['page'] == 'home') {
	include "pages/home/view.php";
}

// Redireccion a la pagina about
if ($_GET['page'] == 'about') {
	include "pages/about/view.php";
}
// Redireccion a la pagina damas
if ($_GET['page'] == 'damas') {
	include "pages/damas/view.php";
}
// Redireccion a la pagina caballeros
if ($_GET['page'] == 'caballeros') {
	include "pages/caballeros/view.php";
}
// Redireccion a la pagina niños
if ($_GET['page'] == 'ninos') {
	include "pages/ninos/view.php";
}
// Redireccion a la pagina niños
if ($_GET['page'] == 'ninas') {
	include "pages/ninas/view.php";
}
// Redireccion a la pagina galeria
if ($_GET['page'] == 'galeria') {
	include "pages/galeria/view.php";
}
// Redireccion  la pagina service
if ($_GET['page'] == 'service') {
	include "pages/service/view.php";
}

// Redireccion a la pagina de contact
if ($_GET['page'] == 'contact') {
	include "pages/contact/view.php";
}
?>
