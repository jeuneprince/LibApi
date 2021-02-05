<?php
require_once("GreetingRestHandler.php");
// Récupération des paramêtres
$view = $_GET["view"] ?? "";
$random = $_GET["random"] ?? 0;
$greetingId = $_GET["id"] ?? 0;
// Url mapping
switch($view){
    case "all":
        // Pour le endpoint /greetings/list/
        $mobileRestHandler = new GreetingRestHandler();
        $mobileRestHandler->getAllGreetings();
        break;

    case "single":
        if($random == 1) {
            //  Pour le endpoint /greetings/random/
            $mobileRestHandler = new GreetingRestHandler();
            $mobileRestHandler->getRandomGreetings();
        } else {
            //  Pour le endpoint /greetings/show/<id>/
            $mobileRestHandler = new GreetingRestHandler();
            $mobileRestHandler->getGreeting($greetingId);
        }

        break;
    case "" :
        //404 - not found;
        break;
}

?>