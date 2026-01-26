<?php
$pageTitle = "About Me";
require __DIR__ . "/partials.php";
render_header($pageTitle);
?>

<section class="page">
    <div class="box">
        <div class="hero-main">
            <div class="about-grid">
                <div class="about-image">
                    <img src="/images/me1.png" alt="Annaliisa Tamme">
                </div>

                <div class="about-text">

                    <div class="highlights-box">
                        <h3>Quick Facts</h3>
                        <ul>
                            <li>📍 Based in Tartu, Estonia</li>
                            <li>🎓 Studying at VOCO</li>
                        </ul>
                    </div>

                    <h1>About Me</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
                    <h3>Technical Skills</h3>
                    <div class="skill-tags">
                        <span class="tag">PHP/ </span><span class="tag">CSS</span>
                        <span class="tag">JavaScript </span><span class="tag">SQL</span>
                    </div>

                    <h3>The Story</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>