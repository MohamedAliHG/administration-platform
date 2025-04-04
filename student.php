<?php

class student {
    private $name;
    private $id;
    private $birthday;
    private $cnxPDO;
    private $section;
   
  

  
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

    public function addStudent()
    {
        $requete ="INSERT INTO students(id,name,birthday,section) VALUES (:id,:name,:birthday,:section) ";
        $reponse=$this->cnxPDO->prepare($requete);
        $reponse->execute(array('id'=>$this->id,'name'=>$this->name,'birthday'=>$this->birthday,'section'=>$this->section));
    }

    public function showList() {
        $query="select * from students ";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute();
        $personnes=$reponse->fetchAll(PDO::FETCH_OBJ);
        return $personnes;
    }

    public function showDetailsV1($id){
        $query ="select * from students where id = '$id'";
        $reponse=$this->cnxPDO->query($query);
        $student=$reponse->fetchAll(PDO::FETCH_OBJ);
        echo 'nom : ' .$student[0]->name . '<br>birthday : ' . $student[0]->birthday .
        '<br>section : ' . $student[0]->section;
    }


  

}