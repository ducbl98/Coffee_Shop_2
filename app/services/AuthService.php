<?php


namespace App\Services;


use App\Models\AuthModel;
use App\Models\Model;

class AuthService
{
    protected AuthModel $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function checkUserEmailPassword($request)
    {
        $user = $this->authModel->findByEmailPassword($request);
        if ($user) {
            $_SESSION['userLogin'] = $user;
            header('Location: ../../home.php');
        }
        return false;
    }

    public function logOut()
    {
        unset($_SESSION['userLogin']);
        header("Location: resources/pages/login.php");
    }

    public function validate()
    {
        if (isset($_POST['submit-register'])) {
            $name = $_POST['user-name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat-password'];
            $phone = $_POST['phone'];
            $pattern = "/^[a-zA-z0-9]*$/";

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: resources/pages/register.php?error=email");
                die();
            } elseif (!preg_match($pattern, $name)) {
                header("Location: resources/pages/register.php?error=username");
                die();
            } elseif ($password !== $repeat_password) {
                header("Location: resources/pages/register.php?error=password");
                die();
            } else {
                $check = $this->authModel->checkEmailExist($email);
                if ($check) {
                    header("Location: resources/pages/register.php?error=exist");
                    die();
                } else {
                    $result = $this->authModel->createUser(
                        $name,
                        $email,
                        $phone,
                        $password
                    );
                    if ($result) {
                        header("Location: index.php?success=ok");
                    }
                }
            }
        }
    }
}