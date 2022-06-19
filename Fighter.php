<?php
class Fighter {
    public $name = "none";
    public  $power = [5,15];
    public $health = 100;
    public $is_alive = true;
    
    public function __construct($name) {
        $this->name = $name;
        
    }
    public function present () {
        echo "Name: ".$this->name.", power: ".$this->power[0]." - ".$this->power[1].", health: ".$this->health;
    }
    public function attack($enemy){
     
      if ($this->is_alive){
        
        $power_array = range($this->power[0],$this->power[1]);
        shuffle($power_array);
        $attack_strength = $power_array[0];
        $enemy->check_living_functions();
        if ($enemy->is_alive){
            
            $enemy->health -= $attack_strength;
            echo "{$this->name} has inflicted {$attack_strength} damage on {$enemy->name}. {$enemy->name}'s health is now: {$enemy->health}</br>";
            $enemy->check_living_functions();  
            if(!$enemy->is_alive){
                $enemy->increment_turn = false;
                echo "Player {$enemy->name} is dead <br>";
            }
            
        }
        
        
    }     
    
    }
    public function check_living_functions(){
        if ($this -> health <= 0){
            $this -> is_alive = false;
          //echo "Player {$this->name} is dead.";
        }
    }
}





?>