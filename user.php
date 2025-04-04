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

  

    

}