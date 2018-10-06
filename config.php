<?php
	session_start();
    require_once "Google API/vendor/autoload.php";
    
	$gClient = new Google_Client();
	$gClient->setClientId("983882960407-mbi0ldbc3bfad9sofbv280qped7ggg2n.apps.googleusercontent.com");
	$gClient->setClientSecret("cy1kuRBzLmEUnDwyWvjASBcS");
    $gClient->setApplicationName("OAuth2 Demo");
    $gClient->setAccessType("offline");
	$gClient->setRedirectUri("http://localhost/OAuth-Authorization-Server-and-an-OAuth-Resource-Server.-/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>

