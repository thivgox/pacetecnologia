<section id="contato" class="section-padding" style="background-color: var(--light-gray);">
    <div class="container">
        <h2 class="section-title">Contato</h2>
        
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['msg_type'] == 'success' ? 'alert-success' : 'alert-error'; ?>">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                    unset($_SESSION['msg_type']);
                ?>
            </div>
        <?php endif; ?>

        <div style="max-width: 600px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px;">
            <form action="contact_process.php" method="POST">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Assunto</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%; font-family: Inter;">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</section>