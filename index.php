<?php
session_start();
require 'flight/Flight.php';
require 'autoloader.php';

Flight::route('/', function(){

    $statusSession = Utils::statusSession();
    Flight::render("Home", array("status_Session" => $statusSession));
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

    Flight::redirect("/");

});

Flight::route('/logout', function(){

    Flight::render('logout');
    Flight::redirect("/");
});

Flight::start();




?>
