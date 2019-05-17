<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/16/2019
 * Time: 11:39 AM
 */
class Token {
    public static function generate_token($session_id){
        $_SESSION['token'] = sha1($session_id);
        return $_SESSION['token'];
    }

    public static function check_token($token){
        if(isset($_COOKIE['token']) && $token === $_COOKIE['token']){

            return true;
        }
        else{
            return false;
        }
    }
}
?>