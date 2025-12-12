<?php define('PAGE_TITLE', 'Home'); include 'includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <img src="assets/images/logo_pace_2.png" alt="Logo da pace" style=" height: 200px; width: auto;">
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h2 class="section-title">Sobre Nós</h2>
        <div class="card-grid">
            <div class="card" style="background: var(--white)">
                <div class="card-icon">🚀</div>
                <h3>Nossa Missão</h3>
                <p>Desenvolver e lançar MVPs de alto impacto e sistemas escaláveis.</p>
                <br><a href="sobre.php#missao" style="color: var(--primary-color);">Ler mais →</a>
            </div>
            <div class="card" style="background: var(--white)">
                <div class="card-icon">👁️</div>
                <h3>Nossa Visão</h3>
                <p>Ser o principal parceiro estratégico no ecossistema de startups.</p>
                <br><a href="sobre.php#visao" style="color: var(--primary-color);">Ler mais →</a>
            </div>
            <div class="card" style="background: var(--white)">
                <div class="card-icon">💎</div>
                <h3>Nossos Valores</h3>
                <p>Agilidade, Inovação, Escalabilidade, Transparência e Qualidade.</p>
                <br><a href="sobre.php#valores" style="color: var(--primary-color);">Ler mais →</a>
            </div>
        </div>
    </div>
</section>

<?php include 'contato.php';?>

<?php include 'includes/footer.php'; ?>