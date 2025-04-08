<?php

abstract class repository{

    private $cnxPDO;
    private $tableName;
 


    public function __construct($name)
    {
        $this->cnxPDO = connexionPdo::getInstance();
        $this->tableName=$name;
    }

    public function findAll()
    {
        $query = "select * from :tableName ";
        $reponse = $this->cnxPDO->prepare($query);
        $reponse->execute(array('tableName'=>$this->tableName));
        $personnes = $reponse->fetchAll(PDO::FETCH_OBJ);
        return $personnes;
    }

    public function findById($id)
    {
        $query = "select * from :tableName where id=:id ";
        $reponse = $this->cnxPDO->prepare($query);
        $reponse->execute(array('tableName'=>$this->tableName,'id' => $id));
        return $reponse->fetchAll(PDO::FETCH_OBJ);

    }

    abstract public function create();

    public function delete($id)
    {
        $requete = "DELETE FROM :tableName where id= :id ";
        $reponse = $this->cnxPDO->prepare($requete);
        $reponse->execute(array('tableName'=>$this->tableName,'id' => $id));
    }


}