<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hosting</title>
        <link rel="stylesheet" href="../assets/styles/css/Website/styles_booking.css">
        <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <img src="../assets/_pictures/background_1test2.png"
        alt=""
        id="background_header">
        <header>
            <div class="bloc-logo">
                <canvas id="logo-canvas"></canvas>
                <div href="" class="logo-mask">Granim.js</div>
            </div>
            <h1> <a href="home">Bilskirnir Location</a> </h1>
            <span>
                <a href="../home">Home</a>
                <a href="../<?= $link_hosting ?>">Become a host</a>
                <a href="">Help</a>
                <a href="">My Account </a>
                <a href="" id="link_img_account"><img src="../assets/_pictures/account.png" alt="" id="img_account"></a>
            </span>
        </header>

        <section>
                <div id="bd-dark"></div>
                <ul class="rslides">
                        <li><img src="../<?= $array_data[0]['picture1'] ?>" alt=""></li>
                        <li><img src="../<?= $array_data[0]['picture2'] ?>" alt=""></li>
                        <li><img src="../<?= $array_data[0]['picture3'] ?>" alt=""></li>

                        <?php 

                            if ($array_data[0]['picture4'] != "empty") {
                                echo "<li><img src=\"../<?= $array_data[0]['picture4'] ?>\" alt=\"\"></li>";
                            }
                            if ($array_data[0]['picture5'] != "empty") {
                                echo "<li><img src=\"../<?= $array_data[0]['picture5'] ?>\" alt=\"\"></li>";
                            }
                        ?>
                </ul>

                <form action="../payment" method="POST">
                    <div id="color">
                        <p><?= $array_data[0]['price'] ?>$ per night</p>
                    </div>
                    <div id="border">
                        <label for="">Beginning :</label> 
                        <input type="date" name="start">
                        <label for="">Ending :</label> 
                        <input type="date" name="end" id="" style="margin-bottom: 85px;" >


                        <label for="submit-form" id="submit-label">Booking</label>
                        <input type="submit" style="display:none" name="" id="submit-form">
                    </div>
                </form>

                <div class="offer">
                    <div class="offer_title"> <h4><?= $array_data[0]['title'] ?></h4> <span>‎★‎★‎★‎★‎★</span> </div>
    
                    <div class="offer_content">
    
                        <!-- 512 characters maximum ! -->
                        
                        <p class="Travelers lato-light"><i class="fa fa-users" aria-hidden="true"></i> <?= $array_data[0]['travelers'] ?> Travelers</p>
                        <p class="Rooms lato-light"><i class="fa fa-home" aria-hidden="true"></i> <?= $array_data[0]['rooms'] ?> Rooms</p>
                        <p class="Beds lato-light"><i class="fa fa-bed" aria-hidden="true"></i> <?= $array_data[0]['beds'] ?> Beds</p>
                        <p class="Bathrooms lato-light"><i class="fa fa-bath" aria-hidden="true"></i> <?= $array_data[0]['bathrooms'] ?> Bathrooms</p>
                        <p class="Kitchens lato-light"><i class="fa fa-cutlery" aria-hidden="true"></i> <?= $array_data[0]['kitchens'] ?> Kitchens</p>
                        <?php 
                            if ($array_data[0]['wifi'] == 1) {
                                echo "<p class=\"Wi-fi lato-light\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wi-fi</p>";
                            }
                            
                            if ($array_data[0]['airConditioner'] == 1) {
                                echo "<p class=\"Air-Conditioner lato-light\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> Air-Conditioner</p>";
                            }
                        ?>
                        <p class="offer_promotion"><?= $array_data[0]['description'] ?></p>
                        <div class="offer_line"></div>

                        <div id="Pictures">
                            <h5>Pictures</h5>
                            <div>
                                <img src="../<?= $array_data[0]['picture1'] ?>" alt="">
                                <img src="../<?= $array_data[0]['picture2'] ?>" alt="">
                                <img src="../<?= $array_data[0]['picture3'] ?>" alt="">

                                <?php 

                                    if ($array_data[0]['picture4'] != "empty") {
                                        echo "<img src=\"../<?= $array_data[0]['picture4'] ?>\" alt=\"\">";
                                    }
                                    if ($array_data[0]['picture5'] != "empty") {
                                        echo "<img src=\"../<?= $array_data[0]['picture5'] ?>\" alt=\"\">";
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="offer_line"></div>

                        <div id="comments">
                            <h5>Comments</h5>
                        </div>
                    </div>

                    <span class="proposedby">Proposed By</span>

                    <div class="offer_profil">
                        <div class="profil_line_vertical"></div>
                        <a href=""><img src="../assets/_pictures/account.png" alt=""></a>
                        <span class="user_profil"> <a href=""><p><?= $object_userId->getFirstname() ?></p> <p><?= $object_userId->getLastname() ?></p></a> </span>
                        <p class="note_profil">Notes : <span>‎★‎★‎★‎★‎★</span></p>
                    </div>
                </div>

                
        </section>

        <script src="../assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="../assets/scripts/granim.js-1.0.6/dist/granim.min.js"></script>
        <script src="../assets/scripts/responsiveslides.min.js"></script>
        <script src="../assets/scripts/script_booking.js"></script>
    </body>
</html>