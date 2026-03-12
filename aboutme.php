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
                    <img src="images/me1.png" alt="Annaliisa Tamme">
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
                    <p class="lead">
                        I am a 20-year-old software development student at Tartu Vocational College (VOCO) with a passion for building clean, functional, and user-centric web applications. My journey into the world of tech started back in primary school when I was first introduced to a 'Basics of Programming' course. Writing my first "Hello World!" in HTML sparked a fascination that has only grown stronger over the years. 
                    <br>
                        Currently I am in my third year of studies, where I focus on mastering the fundamentals of software development and exploring various programming languages and technologies. I enjoy the logic-heavy challenges of backend development while also the creative aspect of software development. When I'm not coding, I enjoy going on walks and from time to time painting.
                    </p>
                    
                    <h3>Technical Skills</h3>
                    <p class="lead">
                        Programming languages: JavaScript, Python, PHP, TypeScript, SQL<br>
                        Web development: React, Node.js, Express, HTML, CSS<br>
                        Databases: MySQL, MariaDB<br>
                        Version control: Git
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>