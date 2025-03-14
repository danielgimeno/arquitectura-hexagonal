<?php

namespace App\Infrastructure\Http;

use App\Application\UserService;
use App\Domain\UserHttpPort;

class UserController implements UserHttpPort {
    private UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getUser(int $id) {
        $user = $this->userService->getUser($id);

        if ($user) {
            return json_encode([
                'id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail()
            ]);
        }

        return json_encode(['error' => 'User not found']);
    }
}
