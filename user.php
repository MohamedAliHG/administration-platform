<?php
class user{
private $id;
private $username;
private $email;
private $role;
private $cnxPDO;
private $password;

public function __construct($id=null, $username=null, $email=null, $role=null,$pwd=null)
{
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
    $this->role = $role;
    $this->password=$pwd;
    $this->cnxPDO=connexionPdo::getInstance();
}


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }

   
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

 
    public function setPassword($password)
    {
        $this->password = $password;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

  
    public function setEmail($email)
    {
        $this->email = $email;
    }

  
    public function getRole()
    {
        return $this->role;
    }

   
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function createTable()
    {
        $requete="CREATE TABLE users (
            id INT PRIMARY KEY,
            username varchar(50),
            email varchar(50),
            role varchar(50),
            pwd varchar(12)
            )";
        $reponse=$this->cnxPDO->query($requete);

    }

    public function addUser()
    {
        $requete ="INSERT INTO users(id,username,email,role,pwd) VALUES (:id,:username,:email,:role,:pwd) ";
        $reponse=$this->cnxPDO->prepare($requete);
        $reponse->execute(array('id'=>$this->id,'username'=>$this->username,'email'=>$this->email,'role'=>$this->role,'pwd'=>$this->password));
    }
    public function login($id,$pwd)
    {
        $query="select role from users where id = :id and pwd = :pwd";
        $reponse=$this->cnxPDO->prepare($query);
        $reponse->execute(array('id'=>$id,'pwd'=>$pwd));
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }

    

}