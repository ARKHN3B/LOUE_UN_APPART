<?php

class User {

    protected $_id;
    protected $_email;
    protected $_firstname;
    protected $_lastname;
    protected $_password;
    protected $_birth;
    protected $_signup;
    protected $_newsletter;
    protected $_profilPic;
    


    public function __construct($data = array()) {
        $this->hydrate($data);
    }
    
    public function getId(){
        return $this->_id;
    }
    
    public function setId($up_id)
    {
        $up_id = (int) $up_id;
    
        if (is_int($up_id)) {
            $this->_id = $up_id;
        }
    }
    
    
    
    public function getEmail(){
        return $this->_email;
    }
    
    public function setEmail($up_email)
    {
        $up_email = (string) $up_email;
    
        if (is_string($up_email)) {
            $this->_email = $up_email;
        }
    }
    
    
    
    public function getFirstname(){
        return $this->_firstname;
    }
    
    public function setFirstname($up_firstname)
    {
        $up_firstname = (string) $up_firstname;
    
        if (is_string($up_firstname)) {
            $this->_firstname = $up_firstname;
        }
    }
    
    
    
    public function getLastname(){
        return $this->_lastname;
    }
    
    public function setLastname($up_lastname)
    {
        $up_lastname = (string) $up_lastname;
    
        if (is_string($up_lastname)) {
            $this->_lastname = $up_lastname;
        }
    }
    
    
    
    public function getPassword(){
        return $this->_password;
    }
    
    public function setPassword($up_password)
    {
        $up_password = (string) $up_password;
    
        if (is_string($up_password)) {
            $this->_password = $up_password;
        }
    }
    
    
    
    public function getBirth(){
        return $this->_birth;
    }
    
    public function setBirth($up_birth)
    {
            $this->_birth = $up_birth;
    }

    
    
    public function getSignup(){
        return $this->_signup;
    }
    
    public function setSignup($up_signup)
    {
            $this->_signup = $up_signup;
    }
    
    

    public function getNewsletter(){
        return $this->_newsletter;
    }
    
    public function setNewsletter($up_newsletter)
    {
        $up_newsletter = (int) $up_newsletter;
    
        if (is_int($up_newsletter)) {
            $this->_newsletter = $up_newsletter;
        }
    }


    
    public function getProfilPic(){
        return $this->_profilPic;
    }
    
    public function setProfilPic($up_profilPic)
    {
        $up_profilPic = (string) $up_profilPic;
    
        if (is_string($up_profilPic)) {
            $this->_profilPic = $up_profilPic;
        }
    }
    
    


    
    
    public function hydrate(array $dataToHydrate)
    {
        foreach ($dataToHydrate as $key => $value) {
            $key = preg_replace("#_#","",$key);

            $method = "set". ucfirst($key);        

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    public function saveInsert(DbManager $Dbmanager)
    {
        $Dbmanager->saveInsertUpdate($this);
    }
    
    
}




