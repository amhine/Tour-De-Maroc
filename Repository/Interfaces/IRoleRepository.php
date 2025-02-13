<?php

namespace Repository\Interfaces;

interface IRoleRepository
{
    public function getAll();
    public function  getRoleByName($role_name);
}

?>