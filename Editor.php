<?php

class Editor{

    private $name;
    

    public function __construct($name=" "){
          $this->name = $name;
    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    function listAuthor$array, $editor){
        foreach ($array as $value){
            if ($array == $value->getEditor())
            {
                echo $value;
            }
        }
    }
    function __toString(){
        return "Édité par: ".$this->name."";
    }
}