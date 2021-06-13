<?php


namespace App\Controllers;


use App\Services\AuthService;

class AuthController
{
    protected AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function login()
    {
        return $this->authService->checkUserEmailPassword($_REQUEST);
    }

    public function logout()
    {
        $this->authService->logOut();
    }

    public function register()
    {
        $this->authService->validate();
    }
}