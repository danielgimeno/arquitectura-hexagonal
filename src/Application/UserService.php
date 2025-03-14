<?php

namespace App\Application;

use App\Domain\UserRepository;
use App\Domain\User;
//aqui tenemos la logica de negocio de la arquitectura hexagonal
class UserService {
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getUser(int $id): ?User {
        return $this->userRepository->findById($id);
    }

    public function createUser(int $id, string $name, string $email): void {
        $user = new User($id, $name, $email);
        $this->userRepository->save($user);
    }
}
