<?php

namespace App\Infrastructure\Persistence;

use App\Domain\UserRepository;
use App\Domain\User;
use PDO;
//Aquí implementamos la persistencia en MySQL. Uno de los adaptadores que implementaran el puerto de UserRepository

class MySQLUserRepository implements UserRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function findById(int $id): ?User {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        return $data ? new User($data['id'], $data['name'], $data['email']) : null;
    }

    public function save(User $user): void {
        $stmt = $this->pdo->prepare("INSERT INTO users (id, name, email) VALUES (?, ?, ?)");
        $stmt->execute([$user->getId(), $user->getName(), $user->getEmail()]);
    }
}
