<?php

$pageTitle ="Projects";
require __DIR__ . "/partials.php";
render_header($pageTitle);

// projects
$projects = [
    [
        "title" => "Online Book Store",
        "desc" => "A full-stack application for browsing and purchasing books. Also comes with an admin panel, where you can manage your store and products.",
        "github" => "https://github.com/attamme/raamatupood",
        "live" => null,
        "img" => "images/demo.jpg"
    ],

    [
        "title" => "Portfolio site",
        "desc" => "This same portfolio site developed with PHP and custom CSS.",
        "github" => "https://github.com/attamme/portfolio",
        "live" => "https://atamme.ee",
        "img" => "images/portfolio.png"
    ],

    [
        "title" => "Messaging app",
        "desc" => "Messaging platform for real-time communication.",
        "github" => "https://github.com/attamme/messaging-app",
        "live" => null,
        "img" => "images/messaging_app.png"
    ],

    [
        "title" => "Furniture store",
        "desc" => "Project for learning React Native, a mobile application for browsing and purchasing furniture.",
        "github" => "https://github.com/attamme/furniture-app",
        "live" => null,
        "img" => "images/demo.jpg"
    ]


];

?>

<section class="page">
    <div class="box">
        <div class="hero-main">
            <h1>Projects</h1>
            <p class="lead">
                Here you can see my projects and their GitHub repositories.
            </p>

            <div class="tiles">
                <?php foreach ($projects as $project): ?>
                    <article class="tile">
                        <div class="image-box image-wide">
                            <img src=" <?= $project['img'] ?>" alt=" <?= $project['title'] ?> ">
                        </div>
                        <h3> <?= $project['title'] ?> </h3>
                        <p> <?= $project['desc'] ?> </p>

                        <div class="project-actions">
                            <a href="<?= $project['github'] ?>" class="project-link" target="_blank">GitHub</a>

                            <?php if (!empty($project['live'])): ?>
                                <span class="sep">|</span>
                                <a href="<?= $project['live'] ?>" class="project-link" target="_blank">Live site</a>
                            <?php endif; ?>
                        </div>

                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>