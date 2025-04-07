<?php

// Exibição de erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuração de Cabeçalhos
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Permitir qualquer origem (ou restringir com URLs específicas)
header('Access-Control-Allow-Methods: *'); // Métodos permitidos, * para permitir todos os métodos ou especificar (GET, POST, etc.)
header('Access-Control-Allow-Headers: Content-Type'); // Cabeçalhos permitidos (Content-Type, Authorization, etc.)

// Configurações do Banco de Dados
define('DB_HOST', '127.0.0.1:3306');
define('DB_NAME', 'todo_list');
define('DB_USER', 'root');
define('DB_PASS', '');

// Função para realizar a conexão com o banco de dados
function conectarBancoDeDados()
{
    try {
        $pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        http_response_code(500);
        die(json_encode(['error' => 'Falha na conexão com o banco de dados: ' . $e->getMessage()]));
    }
}

// Conectar ao banco de dados
$pdo = conectarBancoDeDados();
