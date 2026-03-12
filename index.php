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
                Welcome to my portfolio! Here you can find projects I have worked on and also learn about me more. On this home page you can see featured works of mine, but for more projects and information on them, head over to the projects page. If you want to know more about me, you can visit the about me page, where I talk about my background and skills. And if you want to get in touch with me, you can find my contact information on the contact page.
            </p>

            <div class="tiles">

                <a href="https://github.com/attamme/kriisi_olukorrad" class="tile-link" target="_blank">
                    <article class="tile">
                        <div class="image-box image-wide">
                            <img src="images/kriisiolukorrad.png" alt="Project preview 1">
                        </div>
                        <p>
                            Crisis situations
                        </p>
                    </article>
                </a>

                <a href="https://github.com/attamme/messaging-app" class="tile-link" target="_blank">
                    <article class="tile">
                        <div class="image-box image-wide">
                            <img src="images/messaging_app.png" alt="Project 2">
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