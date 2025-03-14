<?php

require 'vendor/autoload.php';

use App\Infrastructure\Persistence\MySQLUserRepository;
use App\Application\UserService;
use App\Infrastructure\CLI\UserCommand;

// Configuración de la base de datos
$pdo = new PDO("mysql:host=localhost;dbname=hexagon", "daniel", "Asdf1234");
$userRepository = new MySQLUserRepository($pdo);
$userService = new UserService($userRepository);
$userCommand = new UserCommand($userService);

// Leer argumento de la terminal
if ($argc < 3 || $argv[1] !== 'getUser') {
    echo "Uso: php cli.php getUser <user_id>\n";
    exit(1);
}

$id = (int) $argv[2];
$userCommand->getUser($id);
