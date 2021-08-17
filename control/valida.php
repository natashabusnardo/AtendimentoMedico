<?php
require_once "autoload.php";
	session_start();
  	if (!isset($_SESSION['nomeUsuario']))
  		header("location:../view/login.php");