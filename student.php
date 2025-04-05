<?php

class student {
    private $name;
    private $id;
    private $birthday;
    private $cnxPDO;
    private $section;
    private $imgpath;
   
  

  
    public function __construct( $id=null,$name=null, $birthday=null,$section=null,$img=null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->birthday = $birthday;
        $this->cnxPDO=connexionPdo::getInstance();
        $this->section=$section;
        $this->imgpath=$img;
       
      
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
            section varchar(5),
            imgpath varchar(100)
            )";
        $reponse=$this->cnxPDO->query($requete);
    }

    public function addStudent()
    {
        $requete ="INSERT INTO students(id,name,birthday,section,imgpath) VALUES (:id,:name,:birthday,:section,:imgpath) ";
        $reponse=$this->cnxPDO->prepare($requete);
        $reponse->execute(array('id'=>$this->id,'name'=>$this->name,'birthday'=>$this->birthday,'section'=>$this->section,'imgpath'=>$this->imgpath));
    }

    public function deleteStudent ($id){
        $requete ="DELETE FROM students where id= :id ";
        $reponse=$this->cnxPDO->prepare($requete);
        $reponse->execute(array('id'=>$id));
    }

    public function modifyStudent($id,$newid,$name,$birthday,$imgpath){
        $query="update students 
        set name= :name, birthday= :birthday ,imgpath= :imgpath ,id= :newid where id=:id";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute(array('name'=>$name,'birthday'=>$birthday,'imgpath'=>$imgpath,'newid'=>$newid,'id'=>$id));
    }

    public function showList() {
        $query="select * from students ";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute();
        $personnes=$reponse->fetchAll(PDO::FETCH_OBJ);
        return $personnes;
    }
    public function findbyname($name){
        $query="select * from students where name=:name ";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute(array('name'=>$name));
        return $reponse->fetchAll(PDO::FETCH_OBJ);

    }

    public function getListByDesignation($designation){
        $query="select * from students where section=:designation";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute(array('designation'=>$designation));
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }


    public function showDetailsV1($id){
        $query ="select * from students where id = '$id'";
        $reponse=$this->cnxPDO->query($query);
        $student=$reponse->fetchAll(PDO::FETCH_OBJ);
        echo 'nom : ' .$student[0]->name . '<br>birthday : ' . $student[0]->birthday .
        '<br>section : ' . $student[0]->section;
    }

    public function showDetailsV2($id){
        $query ="select * from students where id = :id";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute(array('id'=>$id));
        $student=$reponse->fetchAll(PDO::FETCH_OBJ);
        echo 'nom : ' .$student[0]->name . '<br>birthday : ' . $student[0]->birthday .
        '<br>section : ' . $student[0]->section ;
    }


  

}