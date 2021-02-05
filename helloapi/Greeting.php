<?php
class Greeting{

    private $greetings = array(
        1 => "Bonjour le monde",
        2 => "Bon matin",
        3 => "Salut",
        4 => "Bonne nuit je vais travailler",
        5 => "Hello world",
        6 => "Good morning",
        7 => "Hi",
        8 => "Good night, i'm going to work",
        9 => "Hola Mundo",
        10 => "Buenos dias",
        11 => "Hola",
        12 => "Buenas noches me voy a trabajar",
        13 => "Hallo Welt",
        14 => "guten Morgen",
        15 => "Hallo",
        16 => "Gute Nacht, ich gehe zur Arbei",
    );

    public function getAllGreetings(){
            return $this->greetings;
    }

    public function getRandomGreetings(){
        $nombreItem = count($this->greetings);
        $randomId = rand(1,$nombreItem);
        return $this ->getGreeting($randomId);
    }

    public function getGreeting($id){
        $greeting = array(
            "id" => $id,
            "greeting" => $this->greetings[$id] ?? "Invalide id",
        );
        return $greeting;
    }
}