<?php

$pageTitle ="Projects";
require __DIR__ . "/partials.php";
render_header($pageTitle);

// projects
$projects = [
    [
        "title" => "Online Book Store",
        "desc" => "A full-stack application for browsing and purchasing books.",
        "link" => "https://github.com/attamme/raamatupood",
        "img" => "images/demo.jpg"
    ],

    [
        "title" => "Portfolio site",
        "desc" => "This same portfolio site developed with PHP and custom CSS",
        "link" => "https://github.com/attamme/portfolio",
        "img" => "images/demo.jpg"
    ],

    [
        "title" => "Project 3",
        "desc" => "Description for the third project",
        "link" => "https://github.com/attamme",
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
                    <a href="<?= $project['link'] ?>" class="tile-link" target="_blank">
                        <article class="tile">
                            <div class="image-box image-wide">
                                <img src=" <?= $project['img'] ?>" alt=" <?= $project['title'] ?> ">
                            </div>
                            <h3> <?= $project['title'] ?> </h3>
                            <p> <?= $project['desc'] ?> </p>
                        </article>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>