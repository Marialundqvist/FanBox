<?php

include('template.php');

$_SESSION = array();
session_destroy();

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>