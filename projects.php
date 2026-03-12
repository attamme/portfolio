<?php

$pageTitle ="Projects";
require __DIR__ . "/partials.php";
render_header($pageTitle);

// projects
$projects = [
    [
        "title" => "Crisis situations",
        "desc" => "A small game designed to teach about how to act during different crisis situations, like losing access to water at home or city wide power outage. "."<p>"."This project was done in collaboration with my classmate and was developed using React. Around the time of development, I managed to get a web hosting account, so I also got to learn about deploying a React app and setting up a custom domain.",
        "github" => "https://github.com/attamme/kriisi_olukorrad",
        "live" => "https://kriisiolukorrad.atamme.ee",
        "img" => "images/kriisiolukorrad.png"
    ],

    [
        "title" => "Portfolio site",
        "desc" => "This very same portfolio site, which I built using PHP and a little CSS. "."<p>"."I wanted to have a project where I could practice my PHP skills and also learn about hosting and deploying a website.",
        "github" => "https://github.com/attamme/portfolio",
        "live" => "https://atamme.ee",
        "img" => "images/portfolio.png"
    ],

    [
        "title" => "Messaging app",
        "desc" => "A real-time communication platform built with React and JWT, allowing users to create accounts, join chat rooms, and exchange messages seamlessly."."<p>"."This project was done in collaboration with my classmate and gave us a chance to learn more about data encryption.",
        "github" => "https://github.com/attamme/messaging-app",
        "live" => null,
        "img" => "images/messaging_app.png"
    ],

    [
        "title" => "Furniture store",
        "desc" => "A mobile application for browsing and purchasing furniture. "."<p>"."This is a project in which I got my first look into React Native and also Expo, allowing me to get familiar with mobile application development.",
        "github" => "https://github.com/attamme/furniture-app",
        "live" => null,
        "img" => null
    ],

    [
        "title" => "Online Book Store",
        "desc" => "A full-stack application for browsing and purchasing books. Also comes with an admin panel, where you can manage your store and products."."<p>"."This project was done in collaboration with my classmate and was our first independent full-stack project. Looking back on it now, I can see how much I've learned since then and how much more efficient my code has become, like better folder structure and more reusable components. And most importantly writing down notes, like a simple 'npm start' even.",
        "github" => "https://github.com/attamme/raamatupood",
        "live" => null,
        "img" => null
    ]
];

?>

<section class="page">
    <div class="box">
        <div class="hero-main">
            <h1>Projects</h1>
            <p class="lead">
                Here you can see some of the projects I have worked on during my studies. These projects have allowed me to apply the skills I've learned in a practical way and also to collaborate with my classmates on real-world applications. Each project has its own unique challenges and learning opportunities, and I'm proud of the work I've done on each of them.
                <br>
                Hovering over the project tiles will reveal links to the GitHub repositories, and for some projects, you can also visit the live site to see the application in action.
            </p>

            <div class="tiles">
                <?php foreach ($projects as $project): ?>
                    <article class="tile">

                        <?php if (!empty($project['img'])): ?>
                        <div class="image-box image-wide">
                            <img src=" <?= $project['img'] ?>" alt=" <?= $project['title'] ?> ">
                        </div>
                        <?php endif; ?>

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