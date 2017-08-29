<?php       

class Hosting_Services {

    protected $_userId;
    protected $_housingtype;
    protected $_country;
    protected $_city;
    protected $_title;
    protected $_travelers;
    protected $_beds;
    protected $_bathrooms;
    protected $_rooms;
    protected $_kitchens;
    protected $_wifi;
    protected $_airConditioner;
    protected $_description;
    protected $_img1;
    protected $_img2;
    protected $_img3;
    protected $_img4;
    protected $_img5;


    public function __construct($userId, $housingtype, $country, $city, $title, $travelers, $beds, $bathrooms, $rooms,
    $kitchens, $wifi, $airConditioner, $description, $img1, $img2, $img3, $img4, $img5) {
        $this->_userId = $userId;
        $this->_housingtype = $housingtype;
        $this->_country = $country;
        $this->_city = $city;
        $this->_title = $title;
        $this->_travelers = $travelers;
        $this->_beds = $beds;
        $this->_bathrooms = $bathrooms;
        $this->_rooms = $rooms;
        $this->_kitchens = $kitchens;
        $this->_wifi = $wifi;
        $this->_airConditioner = $airConditioner;
        $this->_description = $description;
        $this->_img1 = $img1;
        $this->_img2 = $img2;
        $this->_img3 = $img3;
        $this->_img4 = $img4;
        $this->_img5 = $img5;
    }


    public function Services()
    {
        $stag_userId = $this->_userId;
        $stag_housingtype = strip_tags($this->_housingtype);
        $stag_country = strip_tags($this->_country);
        $stag_city = strip_tags($this->_city);
        $stag_title = strip_tags($this->_title);
        $stag_travelers = strip_tags($this->_travelers);
        $stag_beds = strip_tags($this->_beds);
        $stag_bathrooms = strip_tags($this->_bathrooms);
        $stag_rooms = strip_tags($this->_rooms);
        $stag_kitchens = strip_tags($this->_kitchens);
        $stag_wifi = strip_tags($this->_wifi);
        $stag_airConditioner = strip_tags($this->_airConditioner);
        $stag_description = strip_tags($this->_description);
        $stag_img1 = $this->_img1;
        $stag_img2 = $this->_img2;
        $stag_img3 = $this->_img3;
        $stag_img4 = $this->_img4;
        $stag_img5 = $this->_img5;
        $stag_data_img = array($stag_img1, $stag_img2, $stag_img3, $stag_img4, $stag_img5); 
        

        if (!empty($stag_housingtype) && !strlen($stag_country) == 0 && !strlen($stag_city) == 0 && !strlen($stag_title) == 0
        && $stag_travelers > 0 && 
        $stag_beds > 0 && $stag_bathrooms > 0 && $stag_rooms > 0 && $stag_kitchens > 0  && strlen($stag_description) > 256){          

            if (!empty($stag_img1) && !empty($stag_img2) && !empty($stag_img3)) {

                for ($i = 1 ; $i <= 5; $i++) { 

                    $image_format_Authorized = array ("jpg", "png", "jpeg", "gif");

                    if (isset($_FILES['img'.$i]) && $_FILES['img'.$i]['error'] == 0){

                        $infos_File_img = pathinfo($_FILES['img'.$i]['name']);
                        $ext = $infos_File_img['extension'];

                        if ($_FILES['img'.$i]['size'] <= 10000000){
                            if (in_array($ext, $image_format_Authorized)){
                                move_uploaded_file($_FILES['img'.$i]['tmp_name'], 'uploads/'.basename($_FILES['img'.$i]['name']));
                                $data_uploads[] = 'uploads/'.$_FILES['img'.$i]['name'];
                            }
                        }
                    }
                }

                if (count($data_uploads) >= 3) {

                    $dbManager = new DbManager();
                    
                    $leasingHome = new LeasingHome();
                    $leasingHome->setUserId($stag_userId);
                    $leasingHome->setCountry($stag_country);
                    $leasingHome->setCity($stag_city);

                    if ($stag_housingtype == "House") {
                        $leasingHome->setHouse(1);
                        $leasingHome->setAppartment(0);
                    } elseif ($stag_housingtype == "Appartment") {
                        $leasingHome->setHouse(0);
                        $leasingHome->setAppartment(1);
                    }

                    $leasingHome->setTitle($stag_title);
                    $leasingHome->setTravelers($stag_travelers);
                    $leasingHome->setBeds($stag_beds);
                    $leasingHome->setBathrooms($stag_bathrooms);
                    $leasingHome->setRooms($stag_rooms);
                    $leasingHome->setKitchens($stag_kitchens);

                    if (!empty($stag_wifi)) {
                        $leasingHome->setWifi(1);
                    }

                    if (!empty($stag_airConditioner)) {
                        $leasingHome->setAirConditioner(1);
                    }

                    $leasingHome->setDescription($stag_description);
                    $leasingHome->setPicture1($data_uploads[0]);
                    $leasingHome->setPicture2($data_uploads[1]);
                    $leasingHome->setPicture3($data_uploads[2]);

                    if (isset($data_uploads[3])) {
                        $leasingHome->setPicture4($data_uploads[3]);
                    } else {
                        $leasingHome->setPicture4("empty");
                    }

                    if (isset($data_uploads[4])) {
                        $leasingHome->setPicture5($data_uploads[4]);
                    } else {
                        $leasingHome->setPicture5("empty");
                    }

                    $leasingHome->save($dbManager);
                }
            }

        // <-- 3 pictures minimum --> //     
        }
    }
}