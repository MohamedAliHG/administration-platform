<?php

class student {
    private $name;
    private $id;
    private $birthday;
    private $cnxPDO;
    private $section;
    private $imgpath;
  

  
    public function __construct( $id=null,$name=null, $birthday=null,$section=null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->birthday = $birthday;
        $this->cnxPDO=connexionPdo::getInstance();
        $this->section=$section;
       
      
    }

 
    public function getName()
    {
        return $this->name;
    }

  
    public function setName($name)
    {
        $this->name = $name;
    }

  
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getbirthday()
    {
        return $this->birthday;
    }

 
    public function setbirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getsection()
    {
        return $this->section;
    }


    public function setsection($section)
    {
        $this->section = $section;
    }


    public function createTable()
    {
        $requete="CREATE TABLE students (
            id INT PRIMARY KEY,
            name varchar(50),
            birthday Date,
            section varchar(5)
            )";
        $reponse=$this->cnxPDO->query($requete);
    }

    


  

}