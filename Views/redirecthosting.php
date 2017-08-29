<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <meta http-equiv="refresh" content="5;url=home" /> -->
        <title>Redirect Hosting</title>
        <link rel="stylesheet" href="assets/styles/css/Website/styles_hosting.css">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <img src="assets/_pictures/background_1test2.png"
        alt=""
        id="background_header">
        <header>
            <div class="bloc-logo">
                <canvas id="logo-canvas"></canvas>
                <div href="" class="logo-mask">Granim.js</div>
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


        <section id="section-redirect">
            <h4 id="h4-redirect">To become a host, please REGISTER and/or LOG IN.</h4>
            <p id="p-redirect">Redirection in <span id="counter">5</span> secondes to the home page... <a href="home">Click here if the redirection doesn't work</a></p> 
        </section>
        


        <script src="assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="assets/scripts/granim.js-1.0.6/dist/granim.min.js"></script>
        <script src="assets/scripts/script_redirecthosting.js"></script>
    </body>
</html>