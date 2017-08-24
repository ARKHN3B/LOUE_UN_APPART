<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="assets/styles/css/Website/styles_signup.css">
</head>
<body>
    <form action="signup_services" method="POST">
            <div id="fb_sign">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>Continue with Facebook
            </div>

            <div id="google_sign">
                <i class="fa fa-google" aria-hidden="true"></i>Continue with Google
            </div>

            <div id="line_or"></div>

            <p id="or">or</p>

            <input type="email" placeholder="Email address" name="email">

            <input type="text" placeholder="Firstname" name="firstname">
            <input type="text" placeholder="Lastname" name="lastname">
            <input type="password" placeholder="Create a password" name="password">
            <input type="password" placeholder="Confirm your password" name="confirmpassword">

            <div id="birth">
                <label for="">Birthday</label>
                <p>To sign up, you must be 18 or older. Other people won't see your Birthday.</p>
                <div>
                    <div>
                        <select name="month" id="">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="day" id="day"></select>
                        <select name="year" id="year"></select>
                    </div>
                </div>   
            </div>

            <span>
                <input type="checkbox" checked="checked" id="checkbox" name="checkbox"> <label for="checkbox">I'd like to receive promotional communications from Bilskirnir and his
                partners via email.
                </label>
            </span>  

            <p id="terms">By clicking Sign up or Continue with, I agree to Bilskirnir's 
                <a href="">Terms of Service</a>, 
                <a href="">Payments Terms of Service</a> and 
                <a href="">Privacy Policy</a>.
            </p>

            <input type="submit" id="submit" style="display:none"> <label for="submit" id="submit_label">Sign up</label>
            
            
    </form>
    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="assets/scripts/script_signup.js"></script>
</body>
</html>