<?php

$pageTitle ="Contact";
require __DIR__ . "/partials.php";
render_header($pageTitle);

?>

<section class="page">
    <div class="box">
        <div class="hero-main">

            <h1>Contact</h1>
            <p class="lead">Feel free to contact me!</p>

            <div class="contact-grid">

                <div class="contact-info">
                    <div class="info-card">
                        <h3>Email</h3>
                        <p>annaliisa.tamme@voco.ee</p>
                    </div>
                    <div class="info-card">
                        <h3>Location</h3>
                        <p>Tartu, Estonia</p>
                    </div>
                    <div class="info-card">
                        <h3>Socials</h3>
                        <a href="https://github.com/attamme" target="_blank" class="pill-link">GitHub</a>
                    </div>
                </div>

                <form action="send_contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" placeholder="Write your message" required></textarea>
                    </div>
                    <button type="submit" class="pill active">Send a message</button> 
                </form>

            </div>

            <!-- message alert -->
            <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                <div style="color: var(--g700); font-weight: bold; margin-bottom: 20px;">
                    Message was sent successfully!
                </div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
                <div style="color: #d9534f; font-weight: bold; margin-bottom: 20px;">
                    Something went wrong. Please try again.
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php render_footer(); ?>