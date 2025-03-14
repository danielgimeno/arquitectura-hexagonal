<?php

namespace App\Domain;

interface UserCommandPort
{
    public function getUser(int $id): void;
} 