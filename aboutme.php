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
                        Hi again! My name is Annaliisa Tamme (also go by Lily) and I'm a 20 year old student at Tartu Vocational College (VOCO). Currently I am on my third year of studying software development, learning new things on a daily basis. 
                    </p>
                    
                    <h3>Technical Skills</h3>
                    <div class="skill-tags">
                        <span class="tag">PHP/ </span><span class="tag">CSS</span>
                        <span class="tag">JavaScript </span><span class="tag">SQL</span>
                    </div>

                    <h3>The Story</h3>
                    <p>I was first introduced to software development in my previous high school, where they offered "Basics to programming" course. As I signed up for it, I had no experience to programming of any sorts and did not know, what to expect. When I wrote my first ever "Hello World!" in HTML, I was fascinated by how "magical" it felt like. There I learned the basics of HTML/CSS and PHP. After that I signed up to couple more courses offered by universities, where they focused on Python. As I become more interested in programming, I decided to specifically learn it, and that's how I became a student at VOCO.
                    Contrary to the stereotype of programmes "not touching grass", I frankly enjoy going outside on walks and make it my daily habit.
                    During my free time I have picked up painting.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>