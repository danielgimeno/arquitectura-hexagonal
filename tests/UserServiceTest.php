<?php

use PHPUnit\Framework\TestCase;
use App\Application\UserService;
use App\Infrastructure\Persistence\InMemoryUserRepository;
use App\Domain\User;

class UserServiceTest extends TestCase {
    private UserService $userService;
    private InMemoryUserRepository $userRepository;

    protected function setUp(): void {
        $this->userRepository = new InMemoryUserRepository();
        $this->userService = new UserService($this->userRepository);
    }

    public function testCreateUser(): void {
        $this->userService->createUser(1, "John Doe", "john@example.com");

        $user = $this->userRepository->findById(1);

        $this->assertNotNull($user);
        $this->assertEquals("John Doe", $user->getName());
        $this->assertEquals("john@example.com", $user->getEmail());
    }

    public function testGetUser(): void {
        $this->userRepository->save(new User(2, "Alice", "alice@example.com"));

        $userDTO = $this->userService->getUser(2);

        $this->assertNotNull($userDTO);
        $this->assertEquals("Alice", $userDTO->getName());
        $this->assertEquals("alice@example.com", $userDTO->getEmail());
    }
}
