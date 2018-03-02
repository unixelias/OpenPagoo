<?php
/*
* Open Pagoo - Pacote Orientada a Objeto para gestão de boletos e remessas em PHP
*
* LICENSE: AGPL-3 - https://www.gnu.org/licenses/agpl-3.0.en.html
*
* Copyright (C) 2018 Elias Alves <unixelias@gmail.com>
*
*/
spl_autoload_register(function ($className) {
	$filename = str_replace(array('OpenPagoo\\','\\',DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR, $className) . '.php';
	$path = __DIR__ . DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR . $filename;
	if (file_exists($path)) {
		include $path;
		return true;
	}else
	{
	return false;
	}
});
?>
