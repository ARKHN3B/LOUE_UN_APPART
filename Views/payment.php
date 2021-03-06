<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Payment</title>
        <link rel="stylesheet" href="assets/styles/css/Website/styles_payment.css">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
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
                <a href="">Home</a>
                <a href="">Become a host</a>
                <a href="">Help</a>
                <a href="">My Account </a>
                <a href="" id="link_img_account"><img src="assets/_pictures/account.png" alt="" id="img_account"></a>
            </span>
        </header>

        <section>
                <div class='card-wrapper'></div>
                <!-- CSS is included via this JavaScript file -->
                <script src="assets/scripts/card.js"></script>
                <form>
                    <input type="text" name="number" placeholder="Card number">
                    <div id="fullname">
                        <input type="text" name="first-name"placeholder="Firstname"/>
                        <input type="text" name="last-name" placeholder="Lastname"/>
                    </div>
                    <div id="code">
                        <input type="text" name="expiry" class="width-inp-code" placeholder="MM/YY"/>
                        <input type="text" name="cvc" class="width-inp-code" placeholder="CVC"/>
                        <input type="submit" name="submit" id="submit">
                    </div>
                    
                    
                </form>
                <script>
                    var card = new Card({
                        form: 'form',
                        container: '.card-wrapper',
                    
                        formSelectors: {
                            nameInput: 'input[name="first-name"], input[name="last-name"]'
                        }
                    });
                </script>
        </section>

        <script src="assets/scripts/card.js"></script>
        <script src="assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="assets/scripts/granim.js-1.0.6/dist/granim.min.js"></script>
        <script src="assets/scripts/script_payment.js"></script>
    </body>
</html>