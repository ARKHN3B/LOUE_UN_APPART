<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Accueil</title>
        <link rel="stylesheet" href="assets/styles/css/Website/styles.css">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body id="body">
        
        <header id="header">
            <img src="assets/_pictures/background_1test2.png"
                 alt="background_header_page"
                 id="background_header">

            <img src="assets/_pictures/Logo_final.png" 
             alt="logo_header_blue"
             title="Welcome on Biskirnir Location"
             id="img_logo_header">

            <div id="navblur"></div>

             <form action="search_location" method="POST" id="form_head">
                <span id="span_checking">

                    <label for="check_house" id="label_check_house">
                        <input type="checkbox" checked="checked" id="check_house" name="check_house">
                        <span id="span_check_house">House</span>
                    </label>

                    <label for="check_appartment" id="label_check_appartment">
                        <input type="checkbox" checked="checked" id="check_appartment" name="check_appartment">
                        <span id="span_check_appartment">Appartment</span>
                    </label>

                    <a href="">More choice <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </span>

                 <span id="span_header">
                     <input type="text" id="search_bar_header" placeholder="Enter a city, or country..." name="search_bar_home"> 
                     <input type="submit" id="submit_header" value="Search">
                 </span>
             </form>

            <div class="overlay"></div>
        </header>

        <span id="title_website">Bilskirnir Location</span>

        <span id="span_header_connexion">
            <a href="<?= $link_hosting ?>">Become a Host</a>
            <a href="">Help</a>
            <a href="signup" target="signin_target" id="signup_link" style="<?= $status_Session[1] ?>">Sign up</a>
            <a href="<?= $status_Session[2] ?>" target="<?= $status_Session[3] ?>" id="signin_link" ><?= $status_Session[0] ?></a> <!--  -->
        </span>
        
        <!-- onclick="$('#iframe_div').css('display', 'block')" -->
        <section>
            <img src="assets/_pictures/Logo_final.png" 
                 alt=""
                 id="logo_section">
            <h3>Latest ads</h3>
            <p>______________________________________________________________________________________________________</p>
                <article>
                    <div>
                        <img src="assets/_pictures/Hotel.jpg" 
                            alt=""
                            title=""
                            id="">
                        <h4>‎Hotel in the center of Montreal</h4>
                        <p class="star">***</p>
                        <p>Charming little hotel in the center of Montreal, in the district of Old Montreal.</p>
                    </div>

                    <div>
                        <img src="assets/_pictures/Luxury.jpg" 
                            alt=""
                            title=""
                            id="">
                        <h4>‎Luxury Villa in California</h4>
                        <p class="star">***</p>
                        <p>Pretty villa of 253m2 in the Californian suburb to 25 min of Los Angeles.</p>
                    </div>
                    
                    <div>
                        <img src="assets/_pictures/Villa.jpg" 
                            alt=""
                            title=""
                            id="">
                        <h4>‎Hotel in the center of Montreal</h4>
                        <p class="star">***</p>
                        <p>Charming little hotel in the center of Montreal, in the district of Old Montreal.</p>
                    </div>
                </article>
        </section>
        <footer>
            <form action="" method="">
                <div id="text_footer_div">
                    <p>NEWSLETTER, the guides and tricks by the great Thor !</p>
                    <p>You can find us on that social media :</p>
                </div>
                
                <div id="inputs_footer_div">
                    <input type="email" placeholder="email" id="first_input_footer"> 
                    <label for="submit_footer">Suscribe</label>
                    <input type="submit" style="display:none" id="submit_footer">

                    <div id="socials_medias_logos">
                     <a href=""> <img src="assets/_pictures/icons/007-facebook.png" alt="" id="first_img_socmed"> </a>
                     <a href=""> <img src="assets/_pictures/icons/006-twitter.png" alt=""> </a>
                     <a href=""> <img src="assets/_pictures/icons/008-instagram.png" alt=""> </a>
                     <a href=""> <img src="assets/_pictures/icons/005-google-plus.png" alt=""> </a>
                    </div>
                </div>
            </form>
            <div id="line_footer"></div>
            <div id="menu_footer">
                <div id="menu_enterprise" class="menus_footer">
                    <h4>The Enterprise</h4>
                    <div class="line_Hfour"></div>
                    <a href="">About us</a>
                    <a href="">Contact</a>
                    <a href="">Careers</a>
                </div>
                <div id="menu_applications" class="menus_footer">
                    <h4>Our Applications</h4>
                    <div class="line_Hfour"></div>
                    <a href="">Discover our applications</a>
                    <div id="logo_appli">
                        <a href=""><i class="fa fa-apple fa-2x" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-android fa-2x" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-windows fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div id="menu_serv_pro" class="menus_footer">
                    <h4>Services Pro</h4>
                    <div class="line_Hfour"></div>
                    <a href="">Help</a>
                    <a href="">Customer access</a>
                    <a href="">Reclamation</a>
                </div>
                <div id="menu_discover" class="menus_footer">
                    <h4>Discover</h4>
                    <div class="line_Hfour"></div>
                    <a href="">Business Directory</a>
                    <a href="">Latest ads</a>
                    <a href="">Gift Cards</a>
                    <a href="">Guidebooks</a>
                    <a href="">Bilskirnir Mag</a>
                </div>
            </div>
        </footer>

        <div id="iframe_div" >
            <iframe src="" frameborder="0" name="signin_target" id="iframe"></iframe>
        </div>
        
        <!-- style="display:none" -->
    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="assets/scripts/script.js"></script>
    </body>
</html>