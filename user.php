<?php 

class User {

    public $name; 

    public function __construct($name) #inicializa variables, al momento de crear al objeto
    {
        $this->name = $name; # se le da valor a la variable publica 
    }

   final public function getName(){
        return $this->name;
    }
}
?>