<?php

class section
{
    private $id;
    private $description;
    private $designation;
    private $cnxPDO;


    public function __construct($id = null, $designation = null, $description = null)
    {
        $this->id = $id;
        $this->description = $description;
        $this->designation = $designation;
        $this->cnxPDO = connexionPdo::getInstance();
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getDesignation()
    {
        return $this->designation;
    }


    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function createTable()
    {
        $requete = "CREATE TABLE section (
            id INT PRIMARY KEY,
            designation varchar(5),
            description varchar(50)
            )";
        $reponse = $this->cnxPDO->query($requete);

    }

    public function addSection()
    {
        $requete = "INSERT INTO section(id,designation,description) VALUES (:id,:designation,:description) ";
        $reponse = $this->cnxPDO->prepare($requete);
        $reponse->execute(array('id' => $this->id, 'designation' => $this->designation, 'description' => $this->description));
    }

    public function deleteSection($id)
    {
        $requete = "DELETE FROM section where id= :id ";
        $reponse = $this->cnxPDO->prepare($requete);
        $reponse->execute(array('id' => $id));
    }

    public function modifySection($id, $designation, $description)
    {
        $query = "update section 
        set designation=:designation,description=:description where id=:id";
        $reponse = $this->cnxPDO->prepare($query);
        $reponse->execute(array('designation' => $designation, 'description' => $description, 'id' => $id));
    }

    public function showList()
    {
        $query = "select * from section ";
        $reponse = $this->cnxPDO->prepare($query);
        $reponse->execute();
        $sections = $reponse->fetchAll(PDO::FETCH_OBJ);

        return $sections;
    }

}