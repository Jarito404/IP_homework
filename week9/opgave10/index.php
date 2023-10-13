<?php
session_set_cookie_params(300,"/");//5 minuten voordat session automatisch eindigt
session_start();
$waardes = array();
$_SESSION["waardes"] = $waardes;
header("Location: waarde.php");
exit();