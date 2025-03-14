<?php

namespace App\Domain;

interface UserHttpPort
{
    public function getUser(int $id);
} 