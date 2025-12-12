<?php
session_start();
require_once 'includes/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    // 2. Validate Inputs
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['message'] = "Por favor, preencha todos os campos obrigatórios.";
        $_SESSION['msg_type'] = "error";
        header("Location: index.php#contato");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Formato de e-mail inválido.";
        $_SESSION['msg_type'] = "error";
        header("Location: index.php#contato");
        exit;
    }

    // 3. Prepare Statement (Security)
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Mensagem enviada com sucesso! Entraremos em contato em breve.";
            $_SESSION['msg_type'] = "success";
        } else {
            $_SESSION['message'] = "Erro ao enviar mensagem. Tente novamente.";
            $_SESSION['msg_type'] = "error";
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Erro interno no banco de dados.";
        $_SESSION['msg_type'] = "error";
    }
    
    $conn->close();
    header("Location: index.php#contato");
    exit;

} else {
    // Direct access to file denied
    header("Location: index.php");
    exit;
}
?>