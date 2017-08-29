<?php

class LeasingHome {

    protected $_id;
    protected $_userId;
    protected $_country;
    protected $_city;
    protected $_house;
    protected $_appartment;
    protected $_title;
    protected $_travelers;
    protected $_beds;
    protected $_rooms;
    protected $_bathrooms;
    protected $_kitchens;
    protected $_wifi;
    protected $_airConditioner;
    protected $_description;
    protected $_picture1;
    protected $_picture2;
    protected $_picture3;
    protected $_picture4;
    protected $_picture5;
    protected $_price;
    
    
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



    public function getUserId(){
        return $this->_userId;
    }
    
    public function setUserId($up_userId)
    {
        $up_userId = (int) $up_userId;
    
        if (is_int($up_userId)) {
            $this->_userId = $up_userId;
        }
    }
    
    
    
    public function getCountry(){
        return $this->_country;
    }
    
    public function setCountry($up_country)
    {
        $up_country = (string) $up_country;
    
        if (is_string($up_country)) {
            $this->_country = $up_country;
        }
    }

    
    
    public function getCity(){
        return $this->_city;
    }
    
    public function setCity($up_city)
    {
        $up_city = (string) $up_city;
    
        if (is_string($up_city)) {
            $this->_city = $up_city;
        }
    }
    
    
    
    public function getTitle(){
        return $this->_title;
    }
    
    public function setTitle($up_title)
    {
        $up_title = (string) $up_title;
    
        if (is_string($up_title)) {
            $this->_title = $up_title;
        }
    }
    
    
    
    public function getTravelers(){
        return $this->_travelers;
    }
    
    public function setTravelers($up_travelers)
    {
        $up_travelers = (int) $up_travelers;
    
        if (is_int($up_travelers)) {
            $this->_travelers = $up_travelers;
        }
    }
    
    
    
    public function getBeds(){
        return $this->_beds;
    }
    
    public function setBeds($up_beds)
    {
        $up_beds = (int) $up_beds;
    
        if (is_int($up_beds)) {
            $this->_beds = $up_beds;
        }
    }
    
    
    
    public function getBathrooms(){
        return $this->_bathrooms;
    }
    
    public function setBathrooms($up_bathrooms)
    {
        $up_bathrooms = (int) $up_bathrooms;
    
        if (is_int($up_bathrooms)) {
            $this->_bathrooms = $up_bathrooms;
        }
    }
    

    
    public function getRooms(){
        return $this->_rooms;
    }
    
    public function setRooms($up_rooms)
    {
        $up_rooms = (int) $up_rooms;
    
        if (is_int($up_rooms)) {
            $this->_rooms = $up_rooms;
        }
    }
    
    
    
    public function getKitchens(){
        return $this->_kitchens;
    }
    
    public function setKitchens($up_kitchens)
    {
        $up_kitchens = (int) $up_kitchens;
    
        if (is_int($up_kitchens)) {
            $this->_kitchens = $up_kitchens;
        }
    }
    

    
    public function getWifi(){
        return $this->_wifi;
    }
    
    public function setWifi($up_wifi)
    {
        $up_wifi = (int) $up_wifi;
    
        if (is_int($up_wifi)) {
            $this->_wifi = $up_wifi;
        }
    }
    

    
    public function getAirConditioner(){
        return $this->_airConditioner;
    }
    
    public function setAirConditioner($up_airConditioner)
    {
        $up_airConditioner = (int) $up_airConditioner;
    
        if (is_int($up_airConditioner)) {
            $this->_airConditioner = $up_airConditioner;
        }
    }


    
    public function getDescription(){
        return $this->_description;
    }
    
    public function setDescription($up_description)
    {
        $up_description = (string) $up_description;
    
        if (is_string($up_description)) {    
            $this->_description = $up_description;
        }
    }
    
    
    

    
    public function getPicture1(){
        return $this->_picture1;
    }
    
    public function setPicture1($up_picture1)
    {
        $up_picture1 = (string) $up_picture1;
    
        if (is_string($up_picture1)) {
            $this->_picture1 = $up_picture1;
        }
    }


    
    public function getPicture2(){
        return $this->_picture2;
    }
    
    public function setPicture2($up_picture2)
    {
        $up_picture2 = (string) $up_picture2;
    
        if (is_string($up_picture2)) {
            $this->_picture2 = $up_picture2;
        }
    }


    
    public function getPicture3(){
        return $this->_picture3;
    }
    
    public function setPicture3($up_picture3)
    {
        $up_picture3 = (string) $up_picture3;
    
        if (is_string($up_picture3)) {
            $this->_picture3 = $up_picture3;
        }
    }


    
    public function getPicture4(){
        return $this->_picture4;
    }
    
    public function setPicture4($up_picture4)
    {
        $up_picture4 = (string) $up_picture4;
    
        if (is_string($up_picture4)) {
            $this->_picture4 = $up_picture4;
        }
    }


    
    public function getPicture5(){
        return $this->_picture5;
    }
    
    public function setPicture5($up_picture5)
    {
        $up_picture5 = (string) $up_picture5;
    
        if (is_string($up_picture5)) {
            $this->_picture5 = $up_picture5;
        }
    }
    
    
    
    public function getHouse(){
        return $this->_house;
    }
    
    public function setHouse($up_house)
    {
        $up_house = (int) $up_house;
    
        if (is_int($up_house)) {
            $this->_house = $up_house;
        }
    }
    
    
    
    public function getAppartment(){
        return $this->_appartment;
    }
    
    public function setAppartment($up_appartment)
    {
        $up_appartment = (int) $up_appartment;
    
        if (is_int($up_appartment)) {
            $this->_appartment = $up_appartment;
        }
    }
    
    

    public function getPrice(){
        return $this->_price;
    }
    
    public function setPrice($up_price)
    {
        $up_price = (int) $up_price;
    
        if (is_int($up_price)) {
            $this->_price = $up_price;
        }
    }


    /* ------ HYDRATATION ------ */

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $key = preg_replace("#_#","",$key);

            $method = "set". ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function save(DbManager $dbmanager)
    {
        $push = $dbmanager->getLeasingHomeRepository();
        $push->saveInsertUpdate($this);
    }
}