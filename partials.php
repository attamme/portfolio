<?php

function nav_item(string $href, string $label): string {
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?? "/";
    $current = basename($path) ?: "index.php";
    $isActive = ($current === $href) ? "active" : "";
    return "<a class=\"pill $isActive\" href=\"$href\">$label</a>";
}

/* header */
function render_header(string $pageTitle): void { ?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Tamme portfolio - <?= htmlspecialchars($pageTitle) ?> </title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" /> <!-- should help with cpanel reading the css file hopefully -->
    <link rel="stylesheet" href="styles_mobile.css?v=<?php echo time(); ?>" media="screen and (max-width: 768px)" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700;800&family=Harmattan:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="layout-container"> 

<!-- nav on the side -->
<aside class="sidebar">

    <div class="sidebar-header">
        <span class="mobile-logo">Annaliisa Tamme</span>
        <button class="hamburger" id="mobile-toggle">☰</button>
    </div>

    <nav class="nav-vertical" id="nav-menu">
        <?= nav_item("index.php", "Home") ?>
        <?= nav_item("projects.php", "Projects") ?> 
        <?= nav_item("aboutme.php", "About") ?> 
        <?= nav_item("contact.php", "Contact") ?> 
    </nav>
</aside>

<main class="main-content">

<div class="top-strip">
    Annaliisa Tamme
</div>

<?php }

/* footer */
function render_footer(): void { ?>

<footer class="footer">
    <div class="wrap footer-inner">
        <span>© <?= date("Y") ?> </span>
    </div>
</footer>

</main>
</div>

<script>
    const toggle = document.getElementById("mobile-toggle");
    const menu = document.getElementById("nav-menu");

    if (toggle && menu) {
        toggle.addEventListener("click", () => {
            menu.classList.toggle("active");
            toggle.textContent = menu.classList.contains("active") ? "✕" : "☰";
        });

        document.querySelectorAll(".nav-vertical a").forEach(link => {
            link.addEventListener("click", () => {
                menu.classList.remove("active");
                toggle.textContent = "☰";
            });
        });
    }
</script>

</body>
</html>

<?php }