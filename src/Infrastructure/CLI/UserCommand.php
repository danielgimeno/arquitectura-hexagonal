<?php

namespace App\Infrastructure\CLI;

use App\Application\UserService;
use App\Domain\UserCommandPort;

class UserCommand implements UserCommandPort {
    private UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getUser(int $id): void {
        $userDTO = $this->userService->getUser($id);

        if (!$userDTO) {
            echo "User not found.\n";
            return;
        }

        echo "User ID: " . $userDTO->getId() . "\n";
        echo "Name: " . $userDTO->getName() . "\n";
        echo "Email: " . $userDTO->getEmail() . "\n";
    }
}
