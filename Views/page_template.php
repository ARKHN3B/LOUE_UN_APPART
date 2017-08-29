<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Location à</title>
        <link rel="stylesheet" href="assets/styles/css/Website/styles_page_template.css">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <img src="assets/_pictures/background_1test2.png"
        alt="background_header_page"
        id="background_header">
        <header>

            <div class="bloc-logo">
                <canvas id="logo-canvas"></canvas>
                <div class="logo-mask">Granim.js</div>
            </div>
            <h1> <a href="home">Bilskirnir Location</a> </h1>
            <span>
                <a href="home">Home</a>
                <a href="<?= $link_hosting ?>">Become a host</a>
                <a href="">Help</a>
                <a href="">My Account </a>
                <a href="" id="link_img_account"><img src="assets/_pictures/account.png" alt="" id="img_account"></a>
            </span>
            
        

        </header>

        <section>
            <div id="title_search">
                    <p>Search for</p>
                    <h2><?= $htmlinsert[2], $htmlinsert[1] ?></h2>
            </div>
            <?= $htmlinsert[0] ?>
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
    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="assets/scripts/granim.js-1.0.6/dist/granim.min.js"></script>
    <script src="assets/scripts/script_page_template.js"></script>
    </body>
</html>