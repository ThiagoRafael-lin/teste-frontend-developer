<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/inc/configuracao.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $email && $telephone && $message) {
        try {
            $sql = "INSERT INTO contatos (name, email, telephone, message) VALUES (:name, :email, :telephone, :message)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':name'     => $name,
                ':email'    => $email,
                ':telephone' => $telephone,
                ':message' => $message
            ]);

            header("Location: index.php?sucesso=1");
            exit;

        } catch (PDOException $e) {
            die("Erro ao salvar no banco: " . $e->getMessage());
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}