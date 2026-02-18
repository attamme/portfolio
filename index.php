<?php

$pageTitle ="Home";
require __DIR__ . "/partials.php";
render_header($pageTitle);

?>

<section class="page">

    <div class="hero">
        <div class="hero-left">
            <div class="image-box image-tall">
                <img src="images/me1.png" alt="Hero image">
            </div>
        </div>

        <div class="hero-main">
            <h1>Hey</h1>
            <p class="lead">
                Welcome to my portfolio! Here you can find projects I have worked on and also learn about me more. On this home page you can see featured works of mine.
            </p>

            <div class="tiles">

                <a href="https://github.com/attamme/portfolio" class="tile-link" target="_blank">
                    <article class="tile">
                        <div class="image-box image-wide">
                            <img src="images/portfolio.png" alt="Project preview 1"> <!-- project 1 -->
                        </div>
                        <p>
                            Portfolio
                        </p>
                    </article>
                </a>

                <a href="https://github.com/attamme/messaging-app" class="tile-link" target="_blank">
                    <article class="tile">
                        <div class="image-box image-wide">
                            <img src="images/messaging_app.png" alt="Project 2"> <!-- project 2 -->
                        </div>
                        <p>
                            Messaging app
                        </p>
                    </article>
                </a>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>