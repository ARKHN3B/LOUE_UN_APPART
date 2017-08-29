<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hosting</title>
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
            <h1> <a href="Accueil.php">Bilskirnir Location</a> </h1>
            <span>
                <a href="home">Home</a>
                <a href="<?= $link_hosting ?>">Become a host</a>
                <a href="">Help</a>
                <a href="">My Account </a>
                <a href="" id="link_img_account"><img src="assets/_pictures/account.png" alt="" id="img_account"></a>
            </span>
        </header>

        <section>
            <h2>Become a host</h2>
            <form action="hosting_services" method="POST" enctype="multipart/form-data">

                <span id="radio">
                        <input type="radio" name="housing_type" value="House" id="radio_house"> 
                        <label for="radio_house">House</label>
                        <input type="radio" name="housing_type" value="Appartment" id="radio_appartment"> 
                        <label for="radio_appartment">Appartment</label>
                </span>

                <div>
                    <input require type="text" name="country" placeholder="Country" class="input-width">
                    <input require type="text" name="price" placeholder="Price / day" class="input-width" style="margin-left:30px; width:150px;" >  
                </div>
                <input require type="text" name="city" placeholder="City" class="input-width input-city">           

                <div id="select-number">
                    <div id="label">
                        <label for="travelers" class="margin-right">Number of travelers :</label>
                        <label for="beds" class="margin-right">Number of beds :</label>
                        <label for="bathrooms" class="margin-right">Number of bathrooms :</label>
                        <label for="rooms" class="margin-right">Number of rooms :</label>
                        <label for="kitchens" class="margin-right">Number of kitchens :</label>
                    </div>

                    <div id="select">
                        <select name="travelers" id="travelers" class="margin-right"></select>  
                        <select name="beds" id="beds" class="margin-right"></select>                   
                        <select name="bathrooms" id="bathrooms" class="margin-right"></select>                   
                        <select name="rooms" id="rooms" class="margin-right"></select>                   
                        <select name="kitchens" id="kitchens" class="margin-right"></select>
                    </div>       
                </div>

                <div id="input-checkbox">
                    <label for="wifi">Wi-fi :</label>
                    <input type="checkbox" name="wifi" id="wifi">
                    <label for="airConditioner">Air Conditioner :</label>
                    <input type="checkbox" name="airConditioner" id="airConditioner">
                </div>

                <input type="text" name="title" id="" class="input-width" placeholder="Title ad">
                <label for="" id="label_textarea">Description :</label>
                <textarea name="description" id="textarea" cols="148" rows="20"></textarea>
                
                <div>
                    <label for="" class="label-file">Fichier 1 :</label>
                    <input type="file" name="img1" class="img" class="input-file">
                    <label for="" class="label-file">Fichier 2 :</label>
                    <input type="file" name="img2" class="img">
                    <label for="" class="label-file">Fichier 3 :</label>
                    <input type="file" name="img3" class="img">
                </div>
                <div>
                    <label for="" class="label-file">Fichier 4 :</label>
                    <input type="file" name="img4" class="img">
                    <label for="" class="label-file">Fichier 5 :</label>
                    <input type="file" name="img5" class="img">
                </div>
                
                
                <label for="submit" id="label_submit">Submit</label>
                <input type="submit" name="submit" id="submit" style="display:none;">
            </form>
        </section>

        <script src="assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="assets/scripts/granim.js-1.0.6/dist/granim.min.js"></script>
        <script src="assets/scripts/script_hosting.js"></script>
    </body>
</html>