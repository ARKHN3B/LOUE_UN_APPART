<?

class Signin_Services {
    public function __construct($email, $password) {
        $this->Services($email, $password);
    }

    public function Services($email, $password)
    {
        $strip_tags_email = strip_tags($email);
        $strip_tags_password = strip_tags($password);

        if (!strlen($strip_tags_email) == 0 && preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $strip_tags_email) && !strlen($strip_tags_password) == 0) {
            $DbManager = new DbManager();
            $data = $DbManager->selectByEmail($strip_tags_email);

            if (!empty($data)) {
                $password_Checking = hash_hmac("sha256", $strip_tags_password, false);

                if ($password_Checking == $data['password']) {
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['firstname'] = $data['firstname'];
                    $_SESSION['lastname'] = $data['lastname'];
                    $_SESSION['birth'] = $data['birth'];
                    $_SESSION['signup'] = $data['signup'];
                }
            }
        }
    }
}

