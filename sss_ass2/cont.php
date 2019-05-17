<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/16/2019
 * Time: 11:37 AM
 */
session_start();
require_once 'token.php';

$_SESSION["logeduser"] = '';


if(isset($_POST['inp']) && isset($_POST['pwd']))

{

    if($_POST['inp'] == "admin" && $_POST['pwd']=="password")

    {

        $_SESSION["logeduser"] = $_POST['inp'];
        $token = Token::generate_token(session_id());
        setcookie("id", session_id());
        setcookie("token", $token);
        header('Location: control.php');
        header('Location: ./control.php'); //redirect to main
    }

    else
    {
        echo "<script>alert('Check username and password');</script>";
        echo "<noscript>Check username and password</noscript>";
    }
}
?>
<!DOCTYPE HTML>
<HTML>
<HEAD><title>ASSIGNMENT 01</title></HEAD>
<body>
<form action=" " method="post" >
    <table>
        <td>
            <tr>
                Username:
            </tr>
            <tr>
                <input type="text" name="inp" >
            </tr>
        </td>
        <td>
            <tr>
                Password:
            </tr>
            <tr>
                <input type="password" name="pwd">
            </tr>
        </td>
        <td>
            <input type="submit" name="submit">
        </td>
    </table>
</form>
</body>
</HTML>
