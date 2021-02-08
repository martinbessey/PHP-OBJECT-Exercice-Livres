<?php 


class Author
{

    private $name;
    private $firstName;



    public function __construct($name = " ", $firstName = " ")
    {
        $this->name = $name;
        $this->firstName= $firstName;
        
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

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }
    public function bibliographie($array, $author)
    {
       /* for ( $i=0; $i < count($array); $i++)
        {
            if($author == $array[$i]->getAuthor())
            {
                echo $array[$i];
                echo "<br/>";
            }       
        }
      
      */
        foreach ($array as $value)
        {
            if($author == $value->getAuthor())
            {
              echo $value;
              echo "<br/>";
            }
        }
    }
    function __toString(){
        return $this->name;
    }
}