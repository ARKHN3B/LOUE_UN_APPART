<?php

class LeasingHomeRepository {

    protected $_connexion;
    
    public function __construct($connexion) {
        $this->_connexion = $connexion;
    }

    public function selectByCountry($country)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE country=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $country
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            foreach ($data as $key) {
                $array_data[] = new LeasingHome($key);
            }

            return $array_data;
        } else {
            return false;
        }
    }

    public function selectByCity($city)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE city=?";
        $request = $connexion->prepare($query); 
        $request->execute(array(
            $city
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            foreach ($data as $key) {
                $array_data[] = new LeasingHome($key);
            }

            return $array_data;
        } else {
            return false;
        }
    }

    public function selectById($id)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE id=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $id
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            return $data;
        } else {
            return false;
        }
    }

    public function checkByHouseAndCountry($house, $country)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE house=? AND country=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $house,
            $country
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            foreach ($data as $key) {
                $array_data[] = new LeasingHome($key);
            }

            return $array_data;
        } else {
            return false;
        }
    }

    public function checkByHouseAndCity($house, $city)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE house=? AND city=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $house,
            $city
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            foreach ($data as $key) {
                $array_data[] = new LeasingHome($key);
            }

            return $array_data;
        } else {
            return false;
        }
    }

    public function checkByAppartmentAndCountry($appartment, $country)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE appartment=? AND country=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $appartment,
            $country
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            foreach ($data as $key) {
                $array_data[] = new LeasingHome($key);
            }

            return $array_data;
        } else {
            return false;
        }
    }

    public function checkByAppartmentAndCity($appartment, $city)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM leasing WHERE appartment=? AND city=?";
        $request = $connexion->prepare($query);
        $request->execute(array(
            $appartment,
            $city
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            foreach ($data as $key) {
                $array_data[] = new LeasingHome($key);
            }

            return $array_data;
        } else {
            return false;
        }
    }

    public function getByUserId($id)
    {
        $connexion = $this->_connexion;
        $query = "SELECT * FROM members WHERE id=:id";
        $request = $connexion->prepare($query);
        $request->execute(array(
            "id"=>$id
        ));
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) {
            return new User($data[0]);
        } else {
            return false;
        }
    }

    public function HTMLFormaterCountry($data, $db)
    {
        $lhr = $db->getLeasingHomeRepository();

        $str = "";
        foreach ($data as $key) {

            $country = $key->getCountry();
            $city = "";

            $description = substr($key->getDescription(), 0, 512);
            $dot = "...";

            $userId = $key->getUserId();
            $getByUserId = $lhr->getByUserId($userId);
                    

        $str .= " <div class=\"offer\">
                <div class=\"offer_title\"> <a href=\"booking/". $key->getId() ."\" style=\"text-decoration:none;  cursor:pointer;\"><h4>". $key->getTitle() ."</h4></a> <span>‎★‎★‎★‎★‎★</span> </div>

                <div class=\"offer_content\">
                    <img src=\"assets/_pictures/Villa.jpg\" alt=\"\">

                    <!-- 512 characters maximum ! -->
                    
                    <p class=\"Travelers lato-light\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ". $key->getTravelers() ." Travelers</p>
                    <p class=\"Rooms lato-light\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> ". $key->getRooms() ." Rooms</p>
                    <p class=\"Beds lato-light\"><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> ". $key->getBeds() ." Beds</p>
                    <p class=\"Bathrooms lato-light\"><i class=\"fa fa-bath\" aria-hidden=\"true\"></i> ". $key->getBathrooms() ." Bathrooms</p>
                    <p class=\"Kitchens lato-light\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> ". $key->getKitchens() ." Kitchens</p>";


                    if ($key->getWifi() == 1 && $key->getairConditioner() == 1) {
                        $str .= "<p class=\"Wi-fi lato-light\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wi-fi</p>
                        <p class=\"Air-Conditioner lato-light\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> Air-Conditioner</p>";
                    } elseif ($key->getWifi() == 1 && $key->getairConditioner() == 0) {
                        $str .= "<p class=\"Wi-fi lato-light\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wi-fi</p>";
                    } elseif ($key->getWifi() == 0 && $key->getairConditioner() == 1) {
                        $str .= "<p class=\"Air-Conditioner lato-light\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> Air-Conditioner</p>";
                    }

                    
                    $str .=    "<p class=\"offer_promotion\">". $description. $dot ."</p>
                    <div class=\"offer_line\"></div>
                </div>";

                $str .= "<div class=\"offer_profil\">
                    <div class=\"profil_line_vertical\"></div>
                    <a href=\"Account/". $userId ."\"><img src=\"assets/_pictures/account.png\" alt=\"\"></a>
                    <span class=\"user_profil\"> <a href=\"Account/". $userId ."\"><p>". ucfirst($getByUserId->getFirstname()) ."</p> <p>". strtoupper($getByUserId->getLastname()) ."</p></a> </span>
                    <p class=\"note_profil\">Notes : <span>‎★‎★‎★‎★‎★</span></p>
                </div>
            </div>";
        }
        return $array_data = array($str, $country, $city);
    }

    public function HTMLFormaterCity($data, $db)
    {
        $lhr = $db->getLeasingHomeRepository();        

        $str = "";
        foreach ($data as $key) {

            $country = $key->getCountry();
            $city = $key->getCity() .", ";

            $description = substr($key->getDescription(), 0, 512);
            $dot = "...";

            $userId = $key->getUserId();
            $getByUserId = $lhr->getByUserId($userId);
                    

        $str .= " <div class=\"offer\">
                <div class=\"offer_title\"> <a href=\"booking/". $key->getId() ."\" style=\"text-decoration:none; cursor:pointer;\"><h4>". $key->getTitle() ."</h4></a> <span>‎★‎★‎★‎★‎★</span> </div>

                <div class=\"offer_content\">
                    <img src=\"assets/_pictures/Villa.jpg\" alt=\"\">

                    <!-- 512 characters maximum ! -->
                    
                    <p class=\"Travelers lato-light\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ". $key->getTravelers() ." Travelers</p>
                    <p class=\"Rooms lato-light\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> ". $key->getRooms() ." Rooms</p>
                    <p class=\"Beds lato-light\"><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> ". $key->getBeds() ." Beds</p>
                    <p class=\"Bathrooms lato-light\"><i class=\"fa fa-bath\" aria-hidden=\"true\"></i> ". $key->getBathrooms() ." Bathrooms</p>
                    <p class=\"Kitchens lato-light\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> ". $key->getKitchens() ." Kitchens</p>";


                    if ($key->getWifi() == 1 && $key->getairConditioner() == 1) {
                        $str .= "<p class=\"Wi-fi lato-light\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wi-fi</p>
                        <p class=\"Air-Conditioner lato-light\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> Air-Conditioner</p>";
                    } elseif ($key->getWifi() == 1 && $key->getairConditioner() == 0) {
                        $str .= "<p class=\"Wi-fi lato-light\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wi-fi</p>";
                    } elseif ($key->getWifi() == 0 && $key->getairConditioner() == 1) {
                        $str .= "<p class=\"Air-Conditioner lato-light\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> Air-Conditioner</p>";
                    }

                    
                    $str .=    "<p class=\"offer_promotion\">". $description.$dot ."</p>
                    <div class=\"offer_line\"></div>
                </div>";

                $str .= "<div class=\"offer_profil\">
                <div class=\"profil_line_vertical\"></div>
                <a href=\"Account/". $userId ."\"><img src=\"assets/_pictures/account.png\" alt=\"\"></a>
                <span class=\"user_profil\"> <a href=\"Account/". $userId ."\"><p>". ucfirst($getByUserId->getFirstname()) ."</p> <p>". strtoupper($getByUserId->getLastname()) ."</p></a> </span>
                <p class=\"note_profil\">Notes : <span>‎★‎★‎★‎★‎★</span></p>
            </div>
        </div>";
        }
        return $array_data = array($str, $country, $city);
        
    }


    public function insertLeasing(LeasingHome $lhome)
    {
        $connexion = $this->_connexion;
        $query = "INSERT INTO leasing(userId, country, city, house, appartment, title, travelers, beds, bathrooms, rooms, 
        kitchens, wifi, airConditioner, description, picture1, picture2, picture3, picture4, picture5) 
                  VALUES (:userId, :country, :city, :house, :appartment, :title, :travelers, :beds, :bathrooms, :rooms, :kitchens, 
                  :wifi, :airConditioner, :description, :picture1, :picture2, :picture3, :picture4, :picture5)";
        $request = $connexion->prepare($query);
        $request->execute(array(
            "userId"=>$lhome->getUserId(),
            "country"=>$lhome->getCountry(),
            "city"=>$lhome->getCity(),
            "house"=>$lhome->getHouse(),
            "appartment"=>$lhome->getAppartment(),
            "title"=>$lhome->getTitle(),
            "travelers"=>$lhome->getTravelers(),
            "beds"=>$lhome->getBeds(),
            "bathrooms"=>$lhome->getBathrooms(),
            "rooms"=>$lhome->getRooms(),
            "kitchens"=>$lhome->getKitchens(),
            "wifi"=>$lhome->getWifi(),
            "airConditioner"=>$lhome->getAirConditioner(),
            "description"=>$lhome->getDescription(),
            "picture1"=>$lhome->getPicture1(),
            "picture2"=>$lhome->getPicture2(),
            "picture3"=>$lhome->getPicture3(),
            "picture4"=>$lhome->getPicture4(),
            "picture5"=>$lhome->getPicture5()
        ));
        return $request->rowCount();
    }

    public function saveInsertUpdate(LeasingHome $hosting)
    {
        if (empty($hosting->getId())) {
            $this->insertLeasing($hosting);
        }
    }
}
