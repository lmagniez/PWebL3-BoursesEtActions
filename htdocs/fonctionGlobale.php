<?php
session_start();
if(isset($_GET['action']))
{
	var_dump("babababab");
    if($_GET['action']=="deco"){
    	$_SESSION=array();
    	header('Location: ./login.php');
    }
}
