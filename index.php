<?php

require 'vendor/autoload.php';

use App\Infrastructure\Persistence\MySQLUserRepository;
use App\Application\UserService;
use App\Infrastructure\Http\UserController;

$pdo = new PDO("mysql:host=localhost;dbname=hexagon", "daniel", "Asdf1234");
$userRepository = new MySQLUserRepository($pdo);
$userService = new UserService($userRepository);
$userController = new UserController($userService);

// Simulación de una petición GET
$id = $_GET['id'] ?? 1;
echo $userController->getUser((int)$id);
