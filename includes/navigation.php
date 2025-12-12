<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar">
    <div class="logo">
        <a href="index.php">
            <img src="assets/images/logo_pace.svg" alt="Logo da Pace Tecnologia" style=" height: 40px; width: auto;">
        </a>
        
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
        <li><a href="sobre.php" class="<?php echo $current_page == 'sobre.php' ? 'active' : ''; ?>">Sobre nós</a></li>
        <li><a href="equipe.php" class="<?php echo $current_page == 'equipe.php' ? 'active' : ''; ?>">Equipe</a></li>
        <li><a href="index.php#contato" class="<?php echo $current_page == 'contato.php' ? 'active' : ''; ?>">Contato</a></li>
    </ul>

    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>