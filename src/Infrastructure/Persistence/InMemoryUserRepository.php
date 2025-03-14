<?php

namespace App\Infrastructure\Persistence;
//adaptador de la arquitectura hexagonal
use App\Domain\UserRepository;
use App\Domain\User;

class InMemoryUserRepository implements UserRepository {
    private array $users = [];

    public function findById(int $id): ?User {
        return $this->users[$id] ?? null;
    }

    public function save(User $user): void {
        $this->users[$user->getId()] = $user;
    }
}
