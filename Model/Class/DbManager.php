<?php

class DbManager {

    protected $_connectToDatabase;
    protected $_leasinghomerepository;


    public function __construct() {
        $this->_connectToDatabase = ConnectionDatabase::setConnexion();
        $this->setLeasingHomeRepository(new LeasingHomeRepository($this->_connectToDatabase));
    }


    public function getLeasingHomeRepository(){
        return $this->_leasinghomerepository;
    }
    
    public function setLeasingHomeRepository($up_leasinghomerepository)
    {
        $this->_leasinghomerepository = $up_leasinghomerepository;
    }
    

    public function insertUser(User $user)
    {
        $connexion = $this->_connectToDatabase;
        $query = "INSERT INTO members(email, firstname, lastname, password, birth, newsletter, signup) VALUES (?, ?, ?, ?, ?, ?, NOW())";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $user->getEmail(),
            $user->getFirstname(),
            $user->getLastname(),
            $user->getPassword(),
            $user->getBirth(),
            $user->getNewsletter()
        ));
        return $request->rowCount();
    }

    public function selectById($id)
    {
        $connexion = $this->_connectToDatabase;
        $query = "SELECT * FROM members WHERE id=:id";
        $request = $connexion->prepare($query);
        $request->execute(array(
            'id'=>$id
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        
        
        if (!empty($data)) {
            $request->closeCursor();
            return new User($data[0]);
            
        } else {
            $request->closeCursor();
            return false;
        }
    }

    public function selectByEmail($email)
    {
        $connexion = $this->_connectToDatabase;
        $query = "SELECT * FROM members WHERE email=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $email
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (empty($data)) {
            return false;
        } else {
            return $data[0];
        }
    }

    public function saveInsertUpdate(User $user)
    {
        if (empty($user->getId())) {
            $this->insertUser($user);
        }
    }
}



