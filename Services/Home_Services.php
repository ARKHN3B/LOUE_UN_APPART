<?php

class Home_Services {

    private $search;
    private $check_house;
    private $check_appartment;

    public function __construct($search, $check_house, $check_appartment) {
        $this->search = $search;
        $this->check_house = $check_house;
        $this->check_appartment = $check_appartment;
    }

    public function Services()
    {
        $stag_search = strip_tags($this->search);
        $stag_check_house = strip_tags($this->check_house);
        $stag_check_appartment = strip_tags($this->check_appartment);

        if (!empty($stag_check_house) && !empty($stag_check_appartment)) {

            $db = new DbManager();

            $search_country = $db->getLeasingHomeRepository();
            $save_search_country = $search_country->selectByCountry($stag_search);

            $search_city = $db->getLeasingHomeRepository();
            $save_search_city = $search_city->selectByCity($stag_search);

            if (!empty($save_search_country)) {

                $htmlformater = $search_country->HTMLFormaterCountry($save_search_country, $db);
                return $htmlformater;

            } elseif (!empty($save_search_city)) {

                $htmlformater = $search_city->HTMLFormaterCity($save_search_city, $db);
                return $htmlformater;

            } else {
                return false;
            }

        } elseif (!empty($stag_check_house) && empty($stag_check_appartment)) {

            $db = new DbManager();
            
                $search_country = $db->getLeasingHomeRepository();
                $save_search_country = $search_country->checkByHouseAndCountry($stag_check_house, $stag_search);
    
                $search_city = $db->getLeasingHomeRepository();
                $save_search_city = $search_city->checkByHouseAndCity($stag_check_house, $stag_search);
    
                if (!empty($save_search_country)) {
    
                    $htmlformater = $search_country->HTMLFormaterCountry($save_search_country);
                    return $htmlformater;
    
                } elseif (!empty($save_search_city)) {
    
                    $htmlformater = $search_city->HTMLFormaterCity($save_search_city);
                    return $htmlformater;
                }

        } elseif (empty($stag_check_house) && !empty($stag_check_appartment)) {

            $db = new DbManager();
            
                $search_country = $db->getLeasingHomeRepository();
                $save_search_country = $search_country->checkByAppartmentAndCountry($stag_check_house, $stag_search);
    
                $search_city = $db->getLeasingHomeRepository();
                $save_search_city = $search_city->checkByAppartmentAndCity($stag_check_house, $stag_search);
    
                if (!empty($save_search_country)) {
    
                    $htmlformater = $search_country->HTMLFormaterCountry($save_search_country);
                    return $htmlformater;
    
                } elseif (!empty($save_search_city)) {
    
                    $htmlformater = $search_city->HTMLFormaterCity($save_search_city);
                    return $htmlformater;
                }
        }
    }
}