<?php

namespace Repository\Interfaces;

interface IUserRepository
{
    public static function signup($instance);
    public function isExist($email);
    public function login($email, $password);
    public function logout();
    public function validateUser();
}