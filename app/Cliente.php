<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //public $timestamps = false;
    public function getClienteAtribute(){
        
        return sprintf('%s, %s ', $this->apellido, $this->nombre); 
        
    }
    
 //protected $table = 'persona';



//
}
