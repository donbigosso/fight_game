<?php 
include "Fighter.php";
include "Fight.php";
    $player_1 = new Fighter("Bigos");
    $player_2 = new Fighter("Czapka");
    $player_3 = new Fighter("Katny");
    $player_4 = new Fighter("Kornel");
    $ufc = new Fight([$player_1, $player_2, $player_3, $player_4]);
    $ufc->random_fight();
?>