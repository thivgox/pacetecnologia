<?php 
require_once 'config.php';
session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('PAGE_TITLE') ? PAGE_TITLE . ' | ' . SITE_NAME : SITE_NAME; ?></title>
    <meta name="description" content="Parceiro estratégico de desenvolvimento de software para startups.">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <?php include 'navigation.php'; ?>
        </div>
    </header>
    <main>
    