<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: new/index.php');
	exit();
}