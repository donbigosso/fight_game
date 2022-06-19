<?php
class Fight {
    public $turn_counter = 1;
    public $living_fighters;
    public function __construct($fighters) {
        $this->fighter_array = $fighters;
        $this->fighter_ammount = count($this->fighter_array);
        $this->alive_count=$this->fighter_ammount;
    } 
    public function check_who_is_alive(){
        $this->living_fighters = array();
        foreach ($this->fighter_array as $x => $val) {
                if($val->is_alive){   
                    array_push($this->living_fighters, $this->fighter_array[$x]);
                }
          }
    }
    public function random_fight(){
        $fighters= $this->fighter_array;
        $count = count($fighters);
        $fighter_indexes = range(0,$count-1);
        
        while ($this->alive_count>1){
            $this->check_who_is_alive();
            $this->alive_count=count($this->living_fighters);
            shuffle($fighter_indexes);
            $attacker = $fighter_indexes[0];
            $deffender = $fighter_indexes[1];
            $this->check_who_is_alive();
            
            $fighters[$attacker]->attack($fighters[$deffender]);
            
           
        }

        echo "<br>And the winner is {$this->living_fighters[0]->name} with {$this->living_fighters[0]->health} health.";
    }


}
?>