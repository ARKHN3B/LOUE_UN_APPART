<?php
session_start();
require 'flight/Flight.php';
require 'autoloader.php';

Flight::route('/', function(){
    Flight::redirect("/home");
});

Flight::route('/home', function(){
    $statusSession = Utils::statusSession();
    $link = Utils::RedirectHosting();
    Flight::render("Home", array("status_Session" => $statusSession, "link_hosting" => $link));
});

Flight::route('POST /search_location', function(){
    $search_bar_home = Flight::request()->data['search_bar_home'];
    $check_house = Flight::request()->data['check_house'];
    $check_appartment = Flight::request()->data['check_appartment'];

    $home_service = new Home_Services($search_bar_home, $check_house, $check_appartment);
    $htmlinsert = $home_service->Services();

    $link = Utils::RedirectHosting();

    Flight::render('page_template', array("htmlinsert" => $htmlinsert, "link_hosting" => $link));
});

Flight::route('/signup', function(){
    Flight::render("signup");
});

Flight::route('POST /signup_services', function(){
    $email = Flight::request()->data['email'];
    $firstname = Flight::request()->data['firstname'];
    $lastname = Flight::request()->data['lastname'];
    $password = Flight::request()->data['password'];
    $confirmpassword = Flight::request()->data['confirmpassword'];
    $month = Flight::request()->data['month'];
    $day = Flight::request()->data['day'];
    $year = Flight::request()->data['year'];
    $checkbox = Flight::request()->data['checkbox'];

    // Flight::register('Signup_ServicesOnFlight', 'Signup_Services');
    // $signup_Services = Flight::Signup_ServicesOnFlight($email, $firstname, $lastname, $password, $confirmpassword, $month, $day, $year, $checkbox);

    $signup_Services = new Signup_Services($email, $firstname, $lastname, $password, $confirmpassword, $month, $day, $year, $checkbox);

    if ($signup_Services == true) {
        echo "<script>top.window.location = './'</script>";
    }
});

Flight::route('/signin', function(){
    Flight::render("signin");
});

Flight::route('POST /signin_services', function(){
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];

    $signin_Services = new Signin_Services($email, $password);

    Flight::redirect("/home");

});

Flight::route('/logout', function(){

    Flight::render('logout');
    Flight::redirect("/home");
});

Flight::route('/hosting', function(){
    $link = Utils::RedirectHosting();

    Flight::render('hosting', array("link_hosting" => $link));
});

Flight::route('POST /hosting_services', function(){
    $userId = $_SESSION['id'];
    $radio = Flight::request()->data['housing_type'];
    $country = Flight::request()->data['country'];
    $city = Flight::request()->data['city'];
    $title = Flight::request()->data['title'];
    $travelers = Flight::request()->data['travelers'];
    $beds = Flight::request()->data['beds'];
    $bathrooms = Flight::request()->data['bathrooms'];
    $rooms = Flight::request()->data['rooms'];
    $kitchens = Flight::request()->data['kitchens'];
    $wifi = Flight::request()->data['wifi'];
    $airConditioner = Flight::request()->data['airConditioner'];
    $description = Flight::request()->data['description'];
    $img1 = Flight::request()->files['img1'];
    $img2 = Flight::request()->files['img2'];
    $img3 = Flight::request()->files['img3'];
    $img4 = Flight::request()->files['img4'];
    $img5 = Flight::request()->files['img5'];

    $hosting_services = new Hosting_Services($userId, $radio, $country, $city, $title, $travelers, $beds, $bathrooms, $rooms, $kitchens,
                                             $wifi, $airConditioner, $description, $img1, $img2, $img3, $img4, $img5);

    $hosting_services_insert = $hosting_services->Services();

    // Flight::redirect('/home');
});

Flight::route('/redirecthosting', function(){
    $link = Utils::RedirectHosting();


    Flight::render('redirecthosting', array("link_hosting" => $link));
});

Flight::route('/account/@id:[0-9]+', function($id){
    // $userId = Flight::request()->query['id'];

    $userId = $id;

    // $userId = str_replace("id=", "", $userId);

    $dbManager = new DbManager();
    $getUserById = $dbManager->getLeasingHomeRepository();
    $data = $getUserById->getByUserId($userId);

    $firstname = $data->getFirstname();
    $lastname = $data->getLastname();
    $email = $data->getEmail();
    $birth = $data->getBirth();
    $register = $data->getSignup();

    Flight::render('Account', array(
        "firstname"=>$firstname,
        "lastname"=>$lastname,
        "email"=>$email,
        "birth"=>$birth,
        "register"=>$register
    ));
});

Flight::route('/booking/@id:[0-9]+', function($id){

    $dbManager = new DbManager();
    $selectId = $dbManager->getLeasingHomeRepository();
    $data = $selectId->selectById($id);
    $userId = $selectId->getByUserId($data[0]['userId']);

    $link = Utils::RedirectHosting();
    Flight::render('booking', array("link_hosting" => $link, "array_data"=>$data, "object_userId"=>$userId));
});

Flight::start();




?>
