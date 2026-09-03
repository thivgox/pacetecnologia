<?php define('PAGE_TITLE', 'História do Demandante');
include 'includes/header.php'; ?>

<section class="section-padding">
    <div class="container" style="max-width: 800px;">
        <h2 class="section-title">A História do Demandante</h2>
        <p style="font-size: 1.1rem; font-weight: 400; color: var(--text-color); text-align: justify;">
            Lorem ipsum dolor sit amet
        </p>
        <p style="font-size: 1.1rem; font-weight: 400; color: var(--text-color); text-align: justify; margin-top: 1rem;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
        </p>
    </div>
</section>

<section class="section-padding" style="background-color: var(--light-gray);">
    <div class="container" style="text-align: center;">
        <h2 class="section-title">Vídeo: A Expectativa do Projeto</h2>
        <p style="font-size: 1rem; color: var(--text-color); margin-bottom: 2rem;">
            Assista ao vídeo abaixo e conheça, em poucos minutos, a história e as expectativas do demandante para este projeto.
        </p>
        <div style="max-width: 720px; margin: 0 auto; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <video width="100%" controls poster="assets/images/demandante-video-thumb.png">
                <source src="assets/videos/demandante-video.mp4" type="video/mp4">
                Seu navegador não suporta a exibição de vídeos.
            </video>
        </div>
    </div>
</section>

<section class="section-padding" style="text-align: center;">
    <div class="container">
        <a href="demanda-solucao.php" class="btn" style="font-family: Inter;">Ver a Demanda e a Solução →</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>