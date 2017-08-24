<?php

class Signup_Services {

    public function __construct($email, $firstname, $lastname, $password, $confirmpassword, $month, $day, $year, $checkbox) {
        $this->Services($email, $firstname, $lastname, $password, $confirmpassword, $month, $day, $year, $checkbox);
    }

    public function Services($email, $firstname, $lastname, $password, $confirmpassword, $month, $day, $year, $checkbox)
    {
        $strip_tags_email = strip_tags($email);
        $strip_tags_firstname = strip_tags($firstname);
        $strip_tags_lastname = strip_tags($lastname);
        $strip_tags_password = strip_tags($password);
        $strip_tags_confirmpassword = strip_tags($confirmpassword);
        $strip_tags_month = strip_tags($month);
        $strip_tags_day = strip_tags($day);
        $strip_tags_year = strip_tags($year);

        if (!strlen($strip_tags_email) == 0 && !strlen($strip_tags_firstname) == 0 && !strlen($strip_tags_lastname) == 0 
            && preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $strip_tags_email)
            && !strlen($strip_tags_password) == 0 && !strlen($strip_tags_confirmpassword) == 0) 
        { 
            $Dbmanager = new DbManager();
            $account_Exist = $Dbmanager->selectByEmail($strip_tags_email);
            
        
            if ($account_Exist == false) {
                if ($strip_tags_password == $strip_tags_confirmpassword) {
                    $pass_hach = hash_hmac("sha256", $strip_tags_password, false);
                    $date_birth = $strip_tags_year."-".$strip_tags_month."-".$strip_tags_day;
                    
                    
                    $user = new User();
                    $user->setEmail($strip_tags_email);
                    $user->setFirstname($strip_tags_firstname);
                    $user->setLastname($strip_tags_lastname);
                    $user->setPassword($pass_hach);
                    $user->setBirth($date_birth);
        
                    if (isset($checkbox)) {
                        $user->setNewsletter(1);
                        $user->saveInsert($Dbmanager);
                        //$this->startSession($strip_tags_email);
                        return true;
                    } else {
                        $user->setNewsletter(0);
                        $user->saveInsert($Dbmanager);
                        //$this->startSession($strip_tags_email);
                        return true;
                    }
                }
            } else {
                return false;
                // header("Location: signup");
            }
        }
    }

    public function startSession($email)
    {
        $data = $DbManager->selectByEmail($email);

        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['firstname'] = $data['firstname'];
        $_SESSION['lastname'] = $data['lastname'];
        $_SESSION['birth'] = $data['birth'];
        $_SESSION['signup'] = $data['signup'];
    }
}



