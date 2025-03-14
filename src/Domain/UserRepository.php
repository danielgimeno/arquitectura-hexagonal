<?php
// el puerto de entrada de datos
namespace App\Domain;

interface UserRepository {
    public function findById(int $id): ?User;
    public function save(User $user): void;
}
