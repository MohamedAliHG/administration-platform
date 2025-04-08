<?php
class repository {

    private $cnxPDO;
    protected string $tableName;

    public function __construct(string $tableName) {
        $this->cnxPDO = connexionPdo::getInstance();
        $this->tableName = $tableName;
    }

    public function findAll()
    {
        $query = "select * from :tableName ";
        $reponse = $this->cnxPDO->prepare($query);
        $reponse->execute(array('tableName'=>$this->tableName));
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($id)
    {
        $query = "select * from :tableName where id=:id ";
        $reponse = $this->cnxPDO->prepare($query);
        $reponse->execute(array('tableName'=>$this->tableName,'id' => $id));
        return $reponse->fetchAll(PDO::FETCH_OBJ);

    }

    public function delete($id)
    {
        $requete = "DELETE FROM :tableName where id= :id ";
        $reponse = $this->cnxPDO->prepare($requete);
        $reponse->execute(array('tableName'=>$this->tableName,'id' => $id));
    }

    
    public function create($data) {
        $fields = array_keys($data);
        $placeholders = array_map(fn($field) => ':' . $field, $fields);
        $query = "INSERT INTO {$this->tableName} (" . implode(', ', $fields) . ")
                VALUES (" . implode(', ', $placeholders) . ")";
        $reponse = $this->cnxPDO->prepare($query);
        return $reponse->execute($data);
    }
    

   
}
?>
