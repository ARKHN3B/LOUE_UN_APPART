<?php

class Utils {
    static public function statusSession()
    {
        $status = "Sign in";
        $signup = "Display:visible";
        $link = "signin";
        $target = "signin_target";

        if (isset($_SESSION['id'])) {
            $status = "Sign out";
            $signup = "Display:none";
            $link = "logout";
            $target = "_parent";
        } else {
            $status = "Sign in";
            $signup = "Display:visible";
            $link = "signin";
            $target = "signin_target";
        }

        $data_Status = array($status, $signup, $link, $target);
        return $data_Status;
    }
}