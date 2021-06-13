<?php


namespace App\Middles;


class AuthCheck
{
    public function isLogin()
    {
        if (!isset($_SESSION['userLogin'])) {
            header("Location: resources/pages/login.php");
        }
    }
}